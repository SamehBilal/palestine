<?php
namespace App\Http\Traits;

use Closure;
use Illuminate\Support\Facades\Cache;

trait CacheHelper{

    protected function _store($key, Closure $value, $tags=['palestine'], $ttl=null)
    {
        $ttl = $ttl ?? now()->addHour(2);
        return Cache::tags($tags)->remember($key, $ttl,  $value);
    }

    protected function _storeFE($key, $value, $tags=['palestine'])
    {
        return Cache::tags($tags)->rememberForEver($key,  $value);
    }

    protected function _get($key, $tags=['palestine'])
    {
        return Cache::tags($tags)->get($key);
    }

    protected function _del($key, $tags=['palestine'])
    {
        if(empty($key)) return null;
        if(is_array($key)){
            foreach($key as $k){
                Cache::tags($tags)->forget($k);
            }
            return true;
        }
        return Cache::tags($tags)->forget($key);
    }

    protected function _if_del($condition, $key, $tags=['palestine'])
    {
        if($condition)
            return $this->_del($key, $tags);
    }

    protected function _check($key)
    {
        return Cache::has($key);
    }

    protected function _flush($tags=['palestine'])
    {
        return Cache::tags($tags)->flush();
    }

    protected function _flushAll()
    {
        return Cache::flush();
    }

}
