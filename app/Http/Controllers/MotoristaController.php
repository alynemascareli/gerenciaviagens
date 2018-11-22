<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MultipleRequestMotoristaPessoa;

use App\model\Motorista;

use App\model\Pessoa;

class MotoristaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $motoristas = Motorista::get();
        return view('/motorista/index', compact('motoristas'));
    }

    public function create(){
        return view('motorista/create');
    }

    public function store(MultipleRequestMotoristaPessoa $request){
        $pessoa = Pessoa::create($request->except('_token'));
        $request['pessoa_id'] = $pessoa['id'];
        Motorista::create($request->except('_token'));

        return redirect('/motorista');
    }
    

    public function show($id){
        $motorista = Motorista::find($id);
    }

    public function edit($id){
        $motorista = Motorista::find($id);

        return view('motorista/edit', compact('motorista'));
    }

    public function update(MultipleRequestMotoristaPessoa $request, $id){
        $motorista = Motorista::find($id);
        $pessoa = $motorista->pessoa;
        $request['pessoa_id'] = $pessoa['id'];
        Motorista::edit($motorista, $request->except('_token', 'id'));
        Pessoa::edit($pessoa, $request->except('_token', 'id'));

        return redirect('/motorista');
    }

    public function destroy($id){
        $motorista = Motorista::find($id);
        $pessoa = $motorista->pessoa;

        $pessoa->delete();
        $motorista->delete();

        return redirect('/motorista');
    }
}
