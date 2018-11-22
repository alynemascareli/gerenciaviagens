<?php

namespace App\Http\Controllers;
use App\model\Viagem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viagens = Viagem::get();
        return view('/viagem/index', compact('viagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/viagem/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['empresa_id']=1;
        Viagem::create($request->except('_token'));
        return redirect('/viagem');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viagem = Viagem::find($id);
        
        return view('/viagem/edit', compact('viagem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $viagem = Viagem::find($request['viagem_id']);
        $request['empresa_id']=1;

        $viagem_id = Viagem::edit($viagem,$request->except('_token','viagem_id'));
        return redirect('/viagem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Viagem::destroy($id);
        return redirect('/viagem');
    }
}
