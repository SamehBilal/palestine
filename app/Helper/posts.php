<?php

use Editors\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

function sluger($text, $seprator = '-')
{
    $text = preg_replace('/\s+/u', $seprator, strtolower(trim($text)));
    $text = str_ireplace(['&', '?', '"', "'", '#', '@', '%', '*', '(', ')'], '', $text);
    return $text;
}

function postType($type, $key = 'name_ar')
{
    $posts = ref_get('posts', 'editors');
    $target = $posts?->where('post_type', $type)->first();
    // abort_if(empty($target), 404);
    return @$target[$key];
}

function post_rexcerpt($text, $len = 14)
{
    return Str::words($text, $len, '');
}

function replace_type($text = null, $type = null)
{
    if (!$text) return true;
    return str_ireplace('{type}', $type, $text);
}

function review_rate_value($num)
{
    if (!$num) return 0;
    return ceil(((float)$num / 10) * 100);
}

function rate_check($num)
{
    if ($num <= 10) return $num;
    return ($num / 100) * 10;
}

function cleaner($text, $html = false)
{
    return clean($text, $html ? 'titles' : null);
}

function fresh($keys, $doIt = 1)
{
    if ($doIt) {
        if (empty($keys)) return null;
        foreach ($keys as $key) {
            if (Cache::has($key)) {
                Cache::forget($key);
            }
        }
    }
}

function has_preview_perm($type)
{
    $auth = auth();
    if ($auth->check()) {
        $super = (array)env_array('SUPER_IDS');
        if (in_array($auth->id(), $super)) {
            return true;
        }
        if ($auth->user()->abilities()->contains('posts_' . $type . '_preview')) {
            return true;
        }
    }
    return false;
}

function get_review_rate($post, $single = false)
{
    if ($single) {
        return isset($post->metas->rate) ? (float)$post->metas->rate : 8;
    }
    if ($rate = $post->meta->firstWhere('key', 'rate')) {
        return (float)$rate->value;
    }
    return 0;
}

function freshPagination($key, $doIt = 1)
{
    if ($doIt) {
        Cache::forget($key);
        for ($i = 0; $i < 100; $i++) {
            $nkey = $key . $i;
            if (Cache::has($nkey)) {
                Cache::forget($nkey);
            } else {
                break;
            }
        }
    }
}

function typesSelect2($array)
{
    $narray = [];
    $narray[] = [
        'text' => 'Select Type',
        'value' => null,
    ];
    foreach ($array as $k => $arr) {
        $narray[] = [
            'text' => $arr,
            'value' => $k,
        ];
    }
    return $narray;
}

function post_types($need = '', $title = '')
{
    $oposts = ref_get('posts', 'editors');
    $posts = collect($oposts);
    if ($need == 'cats') {
        return $posts->where('has_category', true)->pluck('post_type')->implode('|');
    } else if ($need == 'cats_array') {
        return $posts->where('has_category', true)->pluck('post_type')->toArray();
    } else if ($need == 'single') {
        return $posts->where('has_single', true)->pluck('post_type')->implode('|');
    } else if ($need == 'title') {
        return $oposts[$title]['name'];
    } else if ($need == 'route_names') {
        return $posts->pluck('post_type')->implode('|');
    } else if ($need == 'names') {
        return $posts->pluck('post_type')->toArray();
    }
    return $oposts;
}

function industries()
{
    $list = [];
    $list[] = [
        'text' => 'Select Industry',
        'value' => null,
        'extra' => 'disabled selected'
    ];
    Editors\Models\Industry::select('id', 'name')->where('active', true)->get()->each(function ($industry) use (&$list) {
        $list[] = [
            'text' => $industry->name,
            'value' => $industry->id,
        ];
    });
    return $list;
}

function attr_groups()
{
    $list = [];
    $list[] = [
        'text' => 'Select Group',
        'value' => null,
        'extra' => 'disabled selected'
    ];
    Editors\Models\Attribute::select('id', 'name')->get()->each(function ($group) use (&$list) {
        $list[] = [
            'text' => $group->name,
            'value' => $group->id,
        ];
    });
    return $list;
}

function companies($industry = 'games')
{
    $list = [];
    $list[] = [
        'text' => 'Select Company',
        'value' => null,
        'extra' => 'disabled selected'
    ];
    Editors\Models\Company::whereRaw('active=true')->select('id', 'name')
        // ->whereHas('industries', function($q)use($industry){
        //     if($industry){
        //         $q->where($industry, true);
        //     }
        // })
        ->get()->each(function ($company) use (&$list) {
            $list[] = [
                'text' => $company->name,
                'value' => $company->id,
            ];
        });

    return $list;
}

function platforms($data = [])
{
    $data = (array)$data;
    return [
        // ['text' => 'Select Platform', 'value' => null],
        ['text' => 'PC', 'value' => 'pc', 'extra' => in_array('pc', $data) ? 'selected' : ''],
        ['text' => 'MOBILE', 'value' => 'mobile', 'extra' => in_array('mobile', $data) ? 'selected' : ''],
        ['text' => 'PS4', 'value' => 'ps4', 'extra' => in_array('ps4', $data) ? 'selected' : ''],
        ['text' => 'PS5', 'value' => 'ps5', 'extra' => in_array('ps5', $data) ? 'selected' : ''],
        ['text' => 'XBOX', 'value' => 'xbox', 'extra' => in_array('xbox', $data) ? 'selected' : ''],
    ];
}

function langs($data = [])
{
    $data = (array)$data;
    return [
        // ['text' => 'Select Language', 'value' => null],
        ['text' => 'English', 'value' => 'english', 'extra' => in_array('english', $data) ? 'selected' : ''],
        ['text' => 'French', 'value' => 'french', 'extra' => in_array('french', $data) ? 'selected' : ''],
        ['text' => 'Arabic', 'value' => 'arabic', 'extra' => in_array('arabic', $data) ? 'selected' : ''],
        ['text' => 'Chinese', 'value' => 'chinese', 'extra' => in_array('chinese', $data) ? 'selected' : ''],
        ['text' => 'Spanish', 'value' => 'spanish', 'extra' => in_array('spanish', $data) ? 'selected' : ''],
    ];
}

function games_modes($data = [])
{
    $data = (array)$data;
    return [
        // ['text' => 'Select Platform', 'value' => null],
        ['text' => 'TV mode', 'value' => 'tv', 'extra' => in_array('tv', $data) ? 'selected' : ''],
        ['text' => 'Tabletop mode', 'value' => 'tabletop', 'extra' => in_array('tabletop', $data) ? 'selected' : ''],
        ['text' => 'Handheld mode', 'value' => 'handheld', 'extra' => in_array('handheld', $data) ? 'selected' : ''],
    ];
}

function games_players()
{
    return [
        ['text' => 'Select Type', 'value' => null],
        ['text' => 'One Player', 'value' => 0],
        ['text' => 'Multiple Player', 'value' => 1],
    ];
}

function rate_ages($key = null)
{
    $rates = [
        'age3' => '-6px 0px',
        'age7' => '-6px -63px',
        'age12' => '-6px -126px',
        'age16' => '-6px -189px',
        'age18' => '-6px -252px',
        'bad_lang' => '-6px -376px',
        'discrimination' => '-6px -439px',
        'drugs' => '-6px -503px',
        'fear' => '-6px -566px',
        'gambling' => '-6px -629px',
        'sex' => '-6px -691px',
        'violence' => '-6px -753px',
        'purchases' => '-6px -816px',
        'online' => '-6px -878px',
        'esrb_ec' => '-6px -942px',
        'esrb_e' => '-5px -1005px',
        'esrb_e10' => '-6px -1067px',
        'esrb_t' => '-6px -1130px',
        'esrb_m' => '-6px -1193px',
        'esrb_a' => '-6px -1255px',
    ];
    if ($key) {
        return @$rates[$key];
    }
    return $rates;
}

function post_menu_item()
{
    $posts = ref_get('posts', 'editors');
    $nposts = [];
    foreach ($posts as $type) {
        $post_type = 'posts_' . $type['post_type'];
        $nposts[] = nav_item([$post_type . '_list', $post_type . '_add', $post_type . '_edit'], 'child', $type['name'], rout('posts.index', $type['post_type']), $type['icon'], [
            nav_item([$post_type . '_list'], null, $type['name'], rout('posts.index', $type['post_type']), null, [], ['posts'], [$type['post_type']], [null]),
            nav_item([$post_type . '_add'], null, 'Add New', rout('posts.create', $type['post_type']), null, [], ['posts'], [$type['post_type']], ['create']),
            nav_item([$post_type . '_fdelete', $post_type . '_restore'], null, 'Trash', rout('posts.trash', $type['post_type']), null, [], ['posts'], [$type['post_type']], ['trash']),
        ], ['posts'], [$type['post_type']], [null, 'create'], true);
    }
    return $nposts;
}

function prefix($schema = null, $table = null)
{
    $schema = $schema ? $schema . '.' : null;
    return $schema . DB::getTablePrefix() . $table;
}

function scheduled_index()
{
    return 2;
}

function publish_index()
{
    return 3;
}

function status_list($id = 0, $need = '')
{
    $sts = ref_get('posts_status', 'editors');
    $list = [];
    foreach ($sts as $st) {
        $list[$st['value']] = $st['text'];
    }
    switch ($need) {
        case '':
            return isset($list[$id]) ? $list[$id] : 0;
            break;
        case 'all':
            return $list;
        case 'check':
            if (in_array($id, array_keys($list))) {
                return (int)$id;
            }
            return 0;
            break;
    }
}

function getSet($key = null, $array = false)
{
    $set = Cache::get('set');
    if (empty($set)) {
        Manager\Models\Set::cache();
        $set = Cache::get('set');
    }
    $output = $key ? @$set->$key : $set;
    return $array ? jdecode($output) : $output;
}

function getPin($name, $pos = null)
{
    $pin = getSet($name);
    if (empty($pin)) {
        return 0;
    }
    $vpin = jdecode($pin);
    if (!$pos) {
        return @$vpin;
    }
    return @$vpin[$pos];
}

function pins_update($key_name, $pos_name,  $post_id)
{
    $pinsv = getSet($key_name);
    $dpins = ['right' => 0, 'center' => 0, 'left' => 0];
    if (in_array($pos_name, ['right', 'center', 'left'])) {
        if (empty($pinsv)) {
            $dpins[$pos_name] = $post_id;
            Manager\Models\Set::create([
                'key' => $key_name,
                'value' => jencode($dpins)
            ]);
            Cache::forget('set');
        } else {
            $pins = jdecode($pinsv);
            foreach ($pins as $pos => $pid) {
                if ($pos != $pos_name) {
                    if ($pid == $post_id) {
                        $pins[$pos] = 0;
                    }
                }
            }
            $pins[$pos_name] = $post_id;
            $set = Manager\Models\Set::where('key', $key_name)->first();
            $set->value = jencode($pins);
            $set->update();
            Cache::forget('set');
        }
    } else {
        if (!empty($pinsv)) {
            $set = Manager\Models\Set::where('key', $key_name)->first();
            $pins = jdecode($set->value);
            foreach ($pins as $pos => $pid) {
                if ($pid == $post_id) {
                    $pins[$pos] = 0;
                }
            }
            $set->value = jencode($pins);
            $set->update();
            Cache::forget('set');
        }
    }
}

function mpins_update($key_name, $pos_name,  $post_id)
{
    $pinsv = getSet($key_name);
    $dpins = ['right' => 0, 'centera' => 0, 'centerb' => 0, 'left' => 0];
    if (in_array($pos_name, ['right', 'centera', 'centerb', 'left'])) {
        if (empty($pinsv)) {
            $dpins[$pos_name] = $post_id;
            Manager\Models\Set::create([
                'key' => $key_name,
                'value' => jencode($dpins)
            ]);
            Cache::forget('set');
        } else {
            $pins = jdecode($pinsv);
            foreach ($pins as $pos => $pid) {
                if ($pos != $pos_name) {
                    if ($pid == $post_id) {
                        $pins[$pos] = 0;
                    }
                }
            }
            $pins[$pos_name] = $post_id;
            $set = Manager\Models\Set::where('key', $key_name)->first();
            $set->value = jencode($pins);
            $set->update();
            Cache::forget('set');
        }
    } else {
        if (!empty($pinsv)) {
            $set = Manager\Models\Set::where('key', $key_name)->first();
            $pins = jdecode($set->value);
            foreach ($pins as $pos => $pid) {
                if ($pid == $post_id) {
                    $pins[$pos] = 0;
                }
            }
            $set->value = jencode($pins);
            $set->update();
            Cache::forget('set');
        }
    }
}

function check_active($segment, $need = null)
{
    if(is_array($need))
    {
        return in_array(request()->segment($segment), $need) ? 'active' : null;
    }

    return request()->segment($segment) == $need ? 'active' : null;
}

function post_update($post, $is_post = true)
{
    $dt = $is_post ? $post->updated_at : $post;
    return Carbon\Carbon::parse($dt)->format('c');
}

function comment_compile($comment)
{
    return make_links_clickable($comment);
}

function slugify($string, $separator = '-')
{
    if (is_null($string)) {
        return "";
    }

    // Remove spaces from the beginning and from the end of the string
    $string = trim($string);

    // Lower case everything
    // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: https://www.php.net/manual/en/function.mb-strtolower.php
    $string = mb_strtolower($string, "UTF-8");;

    // Make alphanumeric (removes all other characters)
    // this makes the string safe especially when used as a part of a URL
    // this keeps latin characters and arabic charactrs as well
    $string = preg_replace("/[^a-z0-9_\s\-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

    // Remove multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);

    // Convert whitespaces and underscore to the given separator
    $string = preg_replace("/[\s_]/", $separator, $string);

    $string = preg_replace("/\//", $separator, $string);

    return $string;
}

function howStep($iteration, $post, $url, $title, $content)
{
    $content = strip_tags($content);
    if (isset($content) && preg_replace('/\PL/u', '', post_rexcerpt(@$content)) != '') {
        return '{
            "@type": "HowToStep",
            "url": "' . $url . '",
            "name": "' . $title . '",
            "itemListElement": [
                {
                    "@type": "HowToDirection",
                    "text": "' . $content . '"
                }
            ],
            "image": {
                "@type": "ImageObject",
                "@id": "' . $url . '#' . slugify('-' . $iteration . '-' . $title) . '",
                "inLanguage": "ar",
                "url": "' . $post->thumb() . '",
                "contentUrl": "' . $post->thumb() . '",
                "width": 639,
                "height": 556
            }
        },';
    }
}

function post_url($post, $type = '')
{
    $url = rout('post.id', $post->id);
    if ($type == 'comment_id') {
        return $url . '#comments-container';
    } elseif ($type == 'comments') {
        return $url . '/feed';
    }
    return $url;
}

function checkMultiple($key)
{
    if (is_array($key)) {
        $nlkey = [];
        foreach ($key as $ct) {
            $nlkey[]  = cleaner($ct);
        }
        return $nlkey;
    } elseif (strpos($key, ',') !== false) {
        $lkey = @explode(',', $key);
        $nlkey = [];
        foreach ($lkey as $ct) {
            $nlkey[]  = cleaner($ct);
        }
        return $nlkey;
    } else {
        return cleaner($key);
    }
}

function feed_period($type = '')
{
    return $type == 'text' ? 'hourly' : 2;
}

function generate_type_slug($key, $list = [])
{
    $types = $list ?? post_types('names');
    $arr = [];
    foreach ($types as $type) {
        $arr[] = str_ireplace("{type}", $type, $key);
    }
    return $arr;
}
