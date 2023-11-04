<?php

use Editors\Models\Menu;
use Manager\Models\AbilityGroup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

function hsh()
{
    return env('HASH_VER');
}

function env_array($key)
{
    $val = explode(',', env($key));
    if (is_array($val)) {
        return $val;
    }
    return [];
}

function rout($key, $arr = [])
{
    return Route::has($key) ? route($key, $arr) : '#';
}

function ehsh()
{
    return env('EHASH_VER');
}

function business($assets = null)
{
    return rout('business.home') . ($assets ? '/' . $assets  : $assets);
}

function agroup($assets = null)
{
    return rout('agroup.home') . ($assets ? '/' . $assets  : $assets);
}

function module_domain($module)
{
    return env('APP_DOMIANS') === true ? config('modules.' . $module . '.domain')  : null;
}

function net_domain()
{
    return env('APP_DOMIANS') === true ? 'arabhardware.net'  : null;
}

function com_domain()
{
    return env('APP_DOMIANS') === true ? 'arabhardware.com'  : null;
}

function module_prefix($key)
{
    return env('APP_DOMIANS') === true ? null  : config($key);
}

function stripwords($text, $count = 25)
{
    return Str::words(nl2br(strip_tags($text)), $count, '...');
}

function longText($string, $count)
{

    return stripwords($string, $count);
}

function careers($assets = null)
{
    return rout('careers.home') . ($assets ? '/' . $assets  : $assets);
}

function current_url()
{
    return Str::lower(url()->current());
}

function make_links_clickable($text)
{
    $url = env('APP_DOMAIN_URL');
    if (preg_match("/\{$url}\b/", $text)) {
        return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a target="_blank" href="$1">$1</a>', $text);
    } else {
        return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a rel="nofollow" target="_blank" href="$1">$1</a>', $text);
    }
}

function post_title($text, $len = 15)
{
    return Str::words($text, $len, '');
}

function auser($key)
{
    $user = @auth()->user()->$key;
    return $user;
}

function settings_table($key, $value = null)
{
    $table = Manager\Models\Set::class;
    $set = $table::where('key', $key)->first();
    if ($value == null) {
        return $set?->value;
    }
    if (empty($set)) {
        $table::create([
            'key' => $key,
            'value' => $value
        ]);
        return 'Created';
    }
    $set->value = $value;
    $set->update();
    return 'Updated';
}

function bassets($seg = null)
{
    return url('back-assets/' . $seg);
}

function listDirectories()
{
    $files = [];
    $files[] = [
        'text' => 'Select Folder Name',
        'value' => '',
        'extra' => 'disabled',
    ];
    if ($handle = opendir(app_path('Modules/business/resources/views/events'))) {
        $blacklist = array('.', '..', 'somedir', 'somefile.php', '.DS_Store');
        while (false !== ($file = readdir($handle))) {
            if (!in_array($file, $blacklist) && !strpos($file, '.')) {
                $files[] = [
                    'text' => $file,
                    'value' => $file,
                ];
            }
        }
        closedir($handle);
    }
    return $files;
}

function nav_can($can)
{
    if (empty($can)) return null;
    if (!is_array($can)) return $can;
    return implode(",", $can);
}

function nav_item($can, $type, $text = null, $url = '#', $icon = null, $childs = [], $seg2 = [], $seg3 = [], $seg4 = [], $post = false)
{
    return [
        'can' => nav_can($can),
        'type' => $type,
        'text' => $text,
        'url' => $url,
        'icon' => $icon,
        'segments2' => $seg2,
        'segments3' => $seg3,
        'segments4' => $seg4,
        'childs' => $childs,
        'post' => $post
    ];
}

function render_menu($key, $badge = false)
{
    $menu = Menu::where('key', str_ireplace(['"', "'"], '', $key))->whereRaw("active=true")->orderby('id', 'desc')->first();
    if (empty($menu)) {
        return null;
    }
    if (!empty($list = $menu->menu)) {
        $content = '<ul>';
        foreach ($list as $li) {
            $badgev = ($badge && !empty(@$li['badge'])) ? '<span class="badge">' . @$li['badge'] . '</span>' : '';
            $target = isset($li['target']) ? 'target="_blank"' : '';
            $content .= '<li class="' . (current_url() == @$li['url'] ? 'active' : '') . '"><a ' . $target . ' title="' . @$li['title'] . '" href="' . @$li['url'] . '">' . $badgev . @$li['text'] . '</a></li>';
        }
        $content .= '</ul>';
        return $content;
    }
}

function select2_prepare($obj, $placeholder = null, $id = 0, $name = 'name')
{
    if (!empty($obj)) {
        if ($placeholder) {
            $nobj[0] = [
                'text' => $placeholder,
                'value' => 0,
                'extra' => ' selected disabled',
            ];
        }
        $i = 1;
        foreach ($obj as $ob) {
            $nobj[$i] = [
                'text' => $ob->$name,
                'value' => $ob->id,
            ];
            if (in_array($ob->id, (array)$id)) {
                $nobj[$i]['extra'] = 'selected';
            }
            $i++;
        }
        return $nobj;
    }
}

function jencode($arr)
{
    return json_encode($arr);
}

function jdecode($arr, $as_array = true)
{
    return json_decode($arr, $as_array);
}

function ref_update($name, $content)
{
    $fp = fopen(base_path() . '/references/' . $name . '.php', 'w');
    fwrite($fp, '<?php return ' . var_export($content, true) . ';');
    fclose($fp);
}

function ref_get($file, $module = null, $collection = true)
{
    if (is_null($file)) {
        return [];
    }
    if ($module) {
        $ref = 'app/Modules/' . $module . '/references';
    } else {
        $ref = 'references';
    }
    if (strpos($file, '.') === false) {
        $conf = require base_path($ref . '/' . $file . '.php');
        return $collection ? collect($conf) : $conf;
    }
    $parts = explode('.', $file);
    $conf = require base_path($ref . '/' . $parts[0] . '.php');
    $tpart = '';
    foreach ($parts as $i => $part) {
        if ($i == 0) continue;
        $tpart .= '.' . $part . '';
    }
    $tpart = ltrim($tpart, '.');
    return data_get($conf, $tpart);
}

function config_update($name, $content, $module = null)
{
    $path = base_path($module ? 'app/Modules/' . $module . '/configs/' : 'configs/');
    $fp = fopen($path . $name . '.php', 'w');
    fwrite($fp, '<?php return ' . var_export($content, true) . ';');
    fclose($fp);
}

function config_get($file, $module = null)
{
    $path = base_path($module ? 'app/Modules/' . $module : '');
    $conf = require_once $path . '/configs/' . $file . '.php';
    return collect($conf);
}

function rollbar_log($e, $type = '')
{
    $type = $type == '' ? 'error' : $type;
    Log::stack(['rollbar'])->$type($e);
}

function faq_prepare($faq)
{
    $list = [];
    $faq1 = (array)@$faq['new'];
    $faq_old = (array)@$faq['old'];
    foreach ($faq_old as $ofq) {
        $list[] = $ofq;
    }
    foreach ($faq1 as $fq) {
        $list[] = $fq;
    }
    return $list;
}

function faq_lang($list)
{
    $inc = [];
    if (!empty($list['ar'])) {
        $inc['ar'] = faq_prepare($list['ar']);
    }
    if (!empty($list['en'])) {
        $inc['en'] = faq_prepare($list['en']);
    }
    return $inc;
}

function updateCron($title, $action = true, $comment = '')
{
    DB::table('commands_log')->insert([
        'title' => $title,
        'action' => $action,
        'comment' => $comment,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}

function key_prepare($key)
{
    if (is_array($key)) {
        $slug = '';
        foreach ($key as $k) {
            $slug .= sluger($k) . '_';
        }
        return $slug;
    }
    return sluger($key);
}

function v3_field($action, $name = 'g-recaptcha-response')
{
    $fieldId = uniqid($name . '-', false);
    $html = '<input type="hidden" name="' . $name . '" id="' . $fieldId . '">';
    $html .= "<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('" . env('RECAPTCHAV3_SITEKEY') . "', {action: '" . $action . "'}).then(function(token) {
            document.getElementById('" . $fieldId . "').value = token;
        });
    });
    </script>";
    return $html;
}

function role_new($group_name, $abilities = ['list', 'add', 'edit', 'delete', 'fdelete', 'restore', 'bulk'])
{
    try {
        $group_id = DB::table('manager.abilities_groups')->insertGetId(['name' => ucfirst($group_name), 'active' => true]);
        $group = AbilityGroup::find($group_id);

        foreach ($abilities as $li) {
            $items[] = [
                'group_id' => $group->id, 'active' => true, 'name' => ucfirst($li), 'key' => sluger(($group->name) . '_' . ucfirst($li), '_')
            ];
        }
        DB::table('manager.abilities')->insert($items);
    } catch (Throwable $e) {
        return throw new Exception('New Role problem: ' . $e->getMessage());
    }
}

function abilities_seed($name, $key, $group_id = 0, $group_name = null, $group_key = null, $crud = false)
{
    try {
        $list = ['list', 'add', 'edit', 'delete', 'fdelete', 'restore', 'bulk'];
        if ($group_id) {
            $group = AbilityGroup::find($group_id);
            if (empty($group)) {
                return 0;
            }
        } else {
            $group_id = DB::table('manager.abilities_groups')->insertGetId(['name' => $group_name, 'active' => true]);
            $group = AbilityGroup::find($group_id);
        }
        $items = [];
        if ($crud) {
            foreach ($list as $li) {
                $items[] = [
                    'group_id' => $group->id, 'active' => true, 'name' => ucfirst($li), 'key' => sluger(($group_key ?? $group->name) . '_' . ucfirst($li), '_')
                ];
            }
        } else {
            $items = ['group_id' => $group->id, 'active' => true, 'name' => $name, 'key' => $key];
        }
        DB::table('manager.abilities')->insert($items);
        return 1;
    } catch (Throwable $e) {
        return throw new Exception($e->getMessage());
    }
}

function get_follow_links()
{
    return Cache::tags('flinks')->get('followlinks');
}

function get_auto_links()
{

    return Cache::tags('alinks')->get('autolinks');
}

function link_handle($link, $domain = false)
{
    if ($domain) {
        $parse = parse_url($link);
        return @$parse['host'];
    }
    $link = str_ireplace(['www.', 'https://', 'http://'], '', $link);
    return rtrim($link, '/');
}

function regex_slash($text)
{
    return '/' . $text . '/';
}



function regex_keys(array $arr)
{
    $arr = array_keys($arr);
    if (empty($arr)) return [];
    $narr = [];
    foreach ($arr as $li) {
        $narr[] = "/\b" . $li . "\b(?!(?>[^<]*(?:<(?!\ /?a\b)[^<]*)*)<\/a>)/u";
    }
    return $narr;
}
function regex_values(array $arr)
{
    if (empty($arr)) return [];
    $narr = [];
    $country = ipCountry();
    foreach ($arr as $text => $ar) {
        if (request('alink')) {
            dd($_SERVER['REMOTE_ADDR'], $country, $arr, $text, $ar);
        }

        if (!empty(@$ar[$country])) {
            $url = $ar[$country];
        } else {
            $url = $ar['url'];
        }
        $narr[] = "<a href='" . $url . "' target='_blank'>" . $text . "</a>";
    }
    return $narr;
}

function normalizeArabic($string) {
    $replacements = array(
        'أ' => 'ا',
        'إ' => 'ا',
        'ٱ' => 'ا',
        'آ' => 'ا',
        'ة' => 'ه',
    );
    return str_replace(array_keys($replacements), array_values($replacements), $string);
}
