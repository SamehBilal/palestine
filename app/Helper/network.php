<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

function ipInRange($ip, $start_ip, $end_ip)
{
    return (ip2long($ip) >= ip2long($start_ip)) && (ip2long($ip) <= ip2long($end_ip));
}

function ipCountry()
{
    $ip_ranges = [
        ['start' => '156.210.0.0', 'end' => '156.210.255.255', 'country' => 'eg'], // Example for Egypt
        ['start' => '10.0.0.1', 'end' => '10.0.0.255', 'country' => 'ae'],       // Example for UAE
        ['start' => '172.16.0.1', 'end' => '172.16.0.255', 'country' => 'sa'],    // Example for Saudi Arabia

        // Add more IP ranges and countries as needed
    ];

    $user_ip = $_SERVER['REMOTE_ADDR'];
    $country = '';

    // Iterate through the IP range data
    foreach ($ip_ranges as $ip_range) {
        if (ipInRange($user_ip, $ip_range['start'], $ip_range['end'])) {
            $country = $ip_range['country'];
            break;
        }
    }
    return $country;
}

function getIPRangesForCountries(array $countries): array
{
    $baseUrl = "https://stat.ripe.net/data/country-resource-list/data.json?resource=";
    $results = [];

    foreach ($countries as $countryCode) {
        $response = Http::get($baseUrl . strtoupper($countryCode));

        if ($response->successful()) {
            $data = $response->json();
            $ipv4ranges = $data['data']['resources']['ipv4'];



            $minStartIP = PHP_INT_MAX;
            $maxEndIP = 0;
            foreach ($ipv4ranges as $range) {
                $parts = explode('-', $range);
                if (count($parts) < 2) {
                    continue;  // Skip entries that don't look like ranges
                }

                $start = ip2long($parts[0]);
                $end = ip2long($parts[1]);


                // Ensure valid IP long values
                if ($start === false || $end === false) {
                    continue;
                }

                if ($start < $minStartIP) {
                    $minStartIP = $start;
                }
                if ($end > $maxEndIP) {
                    $maxEndIP = $end;
                }
            }

            if ($minStartIP !== PHP_INT_MAX && $maxEndIP !== 0) {
                $results[strtoupper($countryCode)] = [
                    'from' => long2ip($minStartIP),
                    'to' => long2ip($maxEndIP),
                    'name' => strtoupper($countryCode)
                ];
            }
        }
    }

    return $results;
}


function getCountryFromIP(string $ip): ?string
{
    $baseUrl = "https://stat.ripe.net/data/geoloc/data.json?resource=";

    $response = Http::get($baseUrl . $ip);

    if ($response->successful()) {
        $data = $response->json();
        $locations = $data['data']['located_resources'][0]['locations'] ?? [];
        //dd($locations);
        // Get the first location's country (if available)
        foreach ($locations as $location) {
            if (isset($location['country'])) {
                return strtoupper($location['country']);
            }
        }
    }

    return null;  // Return null if country could not be determined
}

function uip()
{
    // $response = file_get_contents('https://httpbin.org/ip');
    // $data = json_decode($response);
    // $ip = $data->origin;
    // return $ip;
    // return $_SERVER['REMOTE_ADDR'];
    return Request::ip();
}

function getUserCountry()
{
    $ip = uip();
    $ip_str = str_ireplace('.', '_', $ip);
    if (request('forget_ip')) {
        Cache::tags('ahwnetwork')->forget($ip_str);
    }
    return Cache::tags('ahwnetwork')->remember($ip_str, now()->addHour(2),  function () use ($ip) {
        $ranges = getIPRangesForCountries(env_array('AUTOLINK_COUNTRIES'));
        $country = null;
        foreach ($ranges as $ccode => $range) {
            if (ipInRange($ip, $range['from'], $range['to'])) {
                $country = $ccode;
            }
        }
        if ($country == null) {
            $country = getCountryFromIP($ip);
        }
        return strtolower($country);
    });
}
