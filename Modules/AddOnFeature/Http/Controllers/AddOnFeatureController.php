<?php

namespace Modules\AddOnFeature\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Hexters\Ladmin\Exceptions\LadminException;

use Modules\AddOnFeature\Repositories\AddOnFeatureRepository;
use Modules\AddOnFeature\Entities\AddOnFeatureDatatables;
use App\Services\AddOnFeatureService;

class AddOnFeatureController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(AddOnFeatureRepository $repository, AddOnFeatureService $service) {
        $this->repository = $repository;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        ladmin()->allow('administrator.master-data.add-on-feature.index');

        return AddOnFeatureDatatables::view('addonfeature::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('addonfeature::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('addonfeature::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('addonfeature::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
