<?php

namespace App\Http\Controllers;

use App\model\Venda;
use App\model\Cliente;
use App\model\Viagem;
use App\model\TipoPagamento;
use App\model\Pagamento;
use Illuminate\Http\Request;

class VendaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Venda::with("cliente")->with('viagem')->with('tipopagamento')->get();
        return view('/venda/index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Cliente::get();
        $viagem = Viagem::get();
        $pagamento = TipoPagamento::get();

        return view('/venda/create', compact('cliente', 'viagem', 'pagamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Venda::create($request->except('_token'));

        $pagamentos = TipoPagamento::where('id',$request['tipo_pagamento_id'])->get();
        $viagem = Viagem::where('id',$request['viagem_id'])->get();
        
        if($pagamentos[0]->tipo==0){
            //criar parcelas c/ vencimento
            //realizar um for c/ a quantidade de pagamentos em $pagamentos[0]->descricao,
            //gerar uma parcela p/ cada
            //vencimento alterando apenas o mes
            //parcela gerada pelo index
            
        }else{
            //pgamento a vista
            // $pagamento = new Pagamento();
            // $pagamento->valor = $viagem[0]->valor;
            // $pagamento->viagem_id= $viagem[0]->id;
            // $pagamento->cliente_id= $request['cliente_id'];
            // $pagamento->descricao= $pagamentos[0]->descricao;
            // $pagamento->empresa_id= 1;
            // $pagamento->vencimento= date('Y-m-d H:i:s');
            // $pagamento->parcela= 1;
            // $pagamento->situacao= 1;
            // $pagamento->pagamento= date('Y-m-d H:i:s');

            $pagamento = [
                'valor' => $viagem[0]->valor,
                // 'viagem_id'=> $viagem[0]->id,
                // 'cliente_id'=> $request['cliente_id'],
                'descricao'=> $pagamentos[0]->descricao,
                'empresa_id'=> 1,
                'vencimento'=> date('Y-m-d H:i:s'),
                'parcela'=> 1,
                'situacao'=> 1,
                'pagamento'=> date('Y-m-d H:i:s'),
            ];
            
            Pagamento::create($pagamento);
        }
        

        return redirect('/venda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
