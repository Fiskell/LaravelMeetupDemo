<?php

namespace App\Http\Controllers;

use App\Examples\Stitch\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

class ProductController extends Controller
{

    /**
     * @var \App\Examples\Stitch\Product\ProductRepositoryInterface $repository
     */
    protected $repository;

    public function __construct(ProductRepositoryInterface $repo) {

        $this->repository = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json($this->repository->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Response::json($this->repository->create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Response::json($this->repository->getDetail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return Response::json($this->repository->update($id, $request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Response::json($this->repository->delete($id));
    }
}
