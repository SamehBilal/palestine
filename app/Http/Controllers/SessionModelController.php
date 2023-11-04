<?php

namespace App\Http\Controllers;

use App\Models\SessionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SessionModelController extends Controller
{
    protected $breadcrumb;
    protected $model    = SessionModel::class;
    protected $rname    = 'sessions';
    protected $bulk_can = 'sessions_bulk';
    protected $phrases  = [
        'index'     => 'Sessions',
        'trash'     => 'Trash',
        'create'    => 'Add Session',
        'update'    => 'Edit Session',
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
        $model->user_id                     = (int)$request->user_id;
        $model->ip_address                  = $request->ip_address;
        $model->user_agent                  = $request->user_agent;
        $model->payload                     = $request->payload;
        $model->last_activity               = $request->last_activity;
        $model->old                         = $request->old;
        /* $model->slug = $this->sluger('name', $request, $model, $mod); */
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
    public function show(SessionModel $session)
    {
        $this->authorize('show', $this->model);
        return $this->admin($this->rname . '.update', [
            'breadcrumb' => $this->breadcrumb,
            'page_title' => $this->phrases['update'],
            'update' => true,
            'route' => $this->rname,
            'result' => $session,
        ]);
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
                ['session_id_' . $model->id],
            );
        }

        $this->_del($keys);
    }
}
