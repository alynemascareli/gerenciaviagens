<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Motorista;

use App\model\Pessoa;

class MotoristaController extends Controller
{
    public function index(){
        $motoristas = Motorista::get();
        return view('/motorista/index', compact('motoristas'));
    }

    public function create(){
        return view('motorista/create');
    }

    public function store(Request $request){
        $pessoa = Pessoa::create($request->except('_token'));
        $request['pessoa_id'] = $pessoa['id'];
        Motorista::create($request->except('_token'));

        return redirect('/motorista');
    }
    
}
