<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Cliente;
use App\model\Pessoa;
use App\model\Endereco;
use App\Http\Requests\MultipleRequestPessoaEndereco;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        return view('/cliente/index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cliente/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MultipleRequestPessoaEndereco $request)
    {
        $pessoa_id = Pessoa::create($request->except('_token'));
        $cliente = Cliente::create(['pessoa_id'=>$pessoa_id['id'], 'empresa_id'=>parent::$configid]);
        $request['id_tipo'] = $cliente['id'];
        $request['tipo'] = "cliente";
        Endereco::create($request->except('_token'));
        
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente  = Cliente::with('endereco')->find($id);
        return view('/cliente/edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MultipleRequestPessoaEndereco $request, $id)
    {
        $cliente = Cliente::find($id);
        $endereco = $cliente->endereco;
        $request['id_tipo'] = $cliente['id'];
        $request['tipo'] = "cliente";
        $pessoa = Pessoa::find($request['pessoa_id']);
        Pessoa::edit($pessoa,$request->except('_token','pessoa_id'));
        Endereco::edit($endereco, $request->except('_token'));
        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $cliente = Cliente::find($id);
        $endereco = $cliente->endereco;
        Cliente::destroy($id);
        Pessoa::destroy($cliente['pessoa_id']);
        $endereco->delete();
        return redirect('/cliente');

    }
}
