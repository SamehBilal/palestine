<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CityController extends Controller
{
    protected $breadcrumb;
    protected $model    = City::class;
    protected $rname    = 'cities';
    protected $bulk_can = 'cities_bulk';
    protected $phrases  = [
        'index'     => 'Cities',
        'trash'     => 'Trash',
        'create'    => 'Add City',
        'update'    => 'Edit City',
    ];

    public function __construct()
    {
        $this->breadcrumb = $this->breadcrumb();
    }

    /**
     * Get a listing of the resource.
     */
    public function autocomplete(Request $request)
    {
        return $this->model::select('id', 'name', 'active')
            ->orderBy('id', 'desc')
            ->take(5)
            ->whereRaw("active = true")
            ->whereNotIn('id', (array)@$request->ids)
            ->where(function ($q) use ($request) {
                if ($name = strtolower($request->name)) {
                    $q->whereRaw("LOWER(name) like '%{$name}%'");
                }
            })->get()->map(function ($li) {
                return [
                    'id'    => $li->id,
                    'label' => $li->name
                ];
            });
    }

    /**
     * Insert the resource.
     */
    public function insert($request, &$model, $mod = 'create')
    {
        //dd($request->all());
        $model->name                        = $request->name;
        $model->state_id                    = (int)$request->state_id;
        /* $model->slug = $this->sluger('name', $request, $model, $mod);
        $model->index = (bool)$request->index; */
    }

    /**
     * Insert the relations after the resource is created.
     */
    public function afterInsert($request, $model, $mod = 'create')
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('index', $this->model);
        $results = $this->model::orderBy('id', 'desc')->where(function ($q) use ($request) {
            if ($request->s) {
                $q->whereRaw("LOWER(name) ilike '%{$request->s}%'");
            }
        })->paginate(20);
        return $this->admin($this->rname . '.index', [
            'breadcrumb' => $this->breadcrumb,
            'page_title' => $this->phrases['index'],
            'results' => $results,
            'trash' => false,
            'route' => $this->rname,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('add', $this->model);
        return $this->admin($this->rname . '.update', [
            'breadcrumb' => $this->breadcrumb,
            'page_title' => $this->phrases['create'],
            'update' => false,
            'route' => $this->rname,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {
        $this->authorize('add', $this->model);
        $this->validate($request, $this->model::rules());
        $model = new $this->model;
        $this->insert($request, $model);
        $model->save();
        $this->afterInsert($request, $model, 'create');
        $this->cleanCache($model);
        return to_route($this->rname . '.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        $this->authorize('show', $this->model);
        return $this->admin($this->rname . '.update', [
            'breadcrumb' => $this->breadcrumb,
            'page_title' => $this->phrases['update'],
            'update' => true,
            'route' => $this->rname,
            'result' => $city,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $this->authorize('edit', $this->model);
        return $this->admin($this->rname . '.update', [
            'breadcrumb' => $this->breadcrumb,
            'page_title' => $this->phrases['update'],
            'update' => true,
            'route' => $this->rname,
            'result' => $city,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $this->authorize('update', $this->model);
        $model = $city;
        $this->validate($request, $this->model::rules($update = true, $city->id));
        $this->insert($request, $model, 'edit');
        $model->update();
        $this->afterInsert($request, $model, 'edit');
        $this->cleanCache($model);
        return back();
    }

    /**
     * Display a listing of the deleted resource.
     */
    public function trash(Request $request)
    {
        $this->authorize('trash', $this->model);
        $results = $this->model::orderBy('id', 'desc')->onlyTrashed()->paginate(20);
        return $this->admin($this->rname . '.index', [
            'breadcrumb' => $this->breadcrumb,
            'page_title' => 'Trash',
            'results' => $results,
            'trash' => true,
            'route' => $this->rname,
        ]);
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Request $request, $id)
    {
        $this->authorize('restore', $this->model);
        $model = $this->model::where('id', (int)$id)->withTrashed()->firstOrFail();
        if (!empty($model)) {
            $model->restore();
            $this->cleanCache($model);
        }
        return to_route($this->rname . '.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $this->authorize('delete', $this->model);
        $action = 'delete';
        if (empty($city)) {
            $city = $city->withTrashed()->firstOrFail();
            $action = Gate::allows('tags_fdelete') ? 'forceDelete' : '';
        }
        $city?->$action();
        $this->cleanCache($city);
        return back();
    }

    /**
     * Cache the specified resource from storage.
     */
    public function cleanCache($model = null)
    {
        $this->_flush(['palestine']);
        $keys = [];
        if ($model) {
            $keys = array_merge(
                $keys,
                ['city_id_' . $model->id],
            );
        }

        $this->_del($keys);
    }
}
