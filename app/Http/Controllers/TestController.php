<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dump(__METHOD__);
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $viewData = Test::viewData();
        return view('test.create', compact('viewData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dump(__METHOD__);
        Test::saveData($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        dump(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        dump(__METHOD__);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        dump(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        dump(__METHOD__);
    }
}
