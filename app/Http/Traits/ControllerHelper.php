<?php
namespace App\Http\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;

trait ControllerHelper{

    public function bulk(Request $request)
    {
        if(!Gate::allows($this->bulk_can ?? true)){
            abort(403);
        }
        if(empty($request->ids) || !in_array($request->type, ['delete', 'fdelete', 'active', 'inactive', 'restore','canceled','uncanceled'])){
            return [
                'status' => 'ACTION_UNSUPPORTED',
            ];
        }
        $list = $this->model::whereIn('id', $request->ids);
        switch($request->type){
            case 'delete':
                $list->delete();
                break;
            case 'fdelete':
                $list->forceDelete();
                break;
            case 'active':
                $list->update(['active'=> true]);
                break;
            case 'inactive':
                $list->update(['active'=> false]);
                break;
            case 'canceled':
                $list->update(['canceled'=> true]);
                break;
            case 'uncanceled':
                $list->update(['canceled'=> false]);
                break;
            case 'restore':
                $list->restore();
                break;
        }
        $this->cleanCache();
        return [
            'status' => 'ACTION_DONE',
        ];
    }

    public function sluger($name, $request, $model, $mod='create')
    {
        $nm     = is_array($request->$name) ? $request->$name['ar'] : $request->$name;
        $slug   = sluger($request->slug ?? $nm);
        $check  = $this->model::where('slug', $slug)->where(function($q)use($request, $model, $mod){
            if($mod == 'edit'){
                $q->where('id', '!=', $model->id);
            }
        })->count();
        if($check){
            $original = $slug;

            $count = 2;

            while ($this->model::whereSlug($slug)->exists()) {

                $slug = "{$original}-" . $count++;
            }
        }
        return $slug;
    }

    public function fresh(array $keys, $doIt=0)
    {
        if($doIt || request()->has('fresh')){
            if(empty($keys)) return null;
            foreach($keys as $key){
                Cache::forget($key);
            }
        }
    }

    public function freshPagination($key, $doIt=1)
    {
        if($doIt){
            Cache::forget($key);
            for ($i=0; $i < 100; $i++) {
                $nkey = $key . $i;
                // if (Cache::has($nkey)) {
                    Cache::forget($nkey);
                // } else {
                //     break;
                // }
            }
        }
    }

    public function breadcrumb($type=null)
    {
        $breadcrumb = [
            'title' =>  ($type ? $this->getAttr($type, 'name'):$this->phrases['index']),
            'childs' => [
                [ 'url' => ($type ? route($this->rname . '.index', request('post_type')):route($this->rname.'.index')), 'text' => ($type ? $this->getAttr($type, 'name'):$this->phrases['index'])],
            ]
        ];

        $id = Auth::user()?->id;
        $user = User::find($id);

        if($user){
            $abilities = $user->abilities()->toArray();
            if($type){
                if(in_array($this->rname.'_'.$type.'_add', $abilities)){
                    $breadcrumb = array_merge(
                        $breadcrumb,[
                            'childs' => [
                                ['url' => route($this->rname . '.create', request('post_type')), 'text' => 'Add New ' . $this->getAttr($type, 'singular_name')],
                            ]
                        ]
                    );
                }
            }else{
                if(in_array($this->rname.'_add', $abilities)){
                    $breadcrumb = array_merge(
                        $breadcrumb,[
                            'childs' => [
                                [ 'url' => route($this->rname.'.create'), 'text' => $this->phrases['create'] ],
                            ]
                        ]
                    );
                }
            }
        }

        return $breadcrumb;
    }

}
