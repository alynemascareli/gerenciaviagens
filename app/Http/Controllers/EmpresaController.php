<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmpresaRequest;
use Illuminate\Http\Request;
use App\model\Empresa;
use PhpParser\Node\Scalar\Encapsed;
use App\model\Endereco;
use App\Http\Requests\MultipleRequestEmpresaEndereco;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::get();
        return view('/empresa/index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa/create');
    }

 
    public function store(MultipleRequestEmpresaEndereco $request)
    {
        $empresa = Empresa::create($request->except('_token'));
        $request['id_tipo'] = $empresa['id'];
        $request['tipo'] = "empresa";
        Endereco::create($request->except('_token'));
        return redirect('/empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::with('endereco')->find($id);
        //dd($empresa);
        return view('empresa/edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MultipleRequestEmpresaEndereco $request, $id)
    {
        $empresa = Empresa::with('endereco')->find($id);
        $endereco = $empresa->endereco;
        $request['id_tipo'] = $empresa['id'];
        $request['tipo'] = "empresa";
        Empresa::edit($empresa, $request->except('_token', 'id'));
        Endereco::edit($endereco, $request->except('_token'));
        return redirect('/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $endereco = $empresa->endereco;

        $empresa->delete();
        $endereco->delete();

        return redirect('/empresa');
    }
}
