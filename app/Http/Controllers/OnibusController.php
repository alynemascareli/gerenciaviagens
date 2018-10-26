<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Onibus;

class OnibusController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onibus = Onibus::get();
        return view('/onibus/index', compact('onibus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/onibus/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['empresa_id'] = 1;
        Onibus::create($request->except('_token'));
        return redirect('/onibus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $onibus = Onibus::find($id);
        return view('/onibus/edit', compact('onibus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $onibus = Onibus::find($request['onibus_id']);
        $onibus_id = Onibus::edit($onibus,$request->except('_token','onibus_id'));
        return redirect('/onibus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Onibus::destroy($id);
        return redirect('/onibus');
    }
}
