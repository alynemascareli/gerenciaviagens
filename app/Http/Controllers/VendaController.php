<?php

namespace App\Http\Controllers;

use App\model\Venda;
use App\model\Cliente;
use App\model\Viagem;
use App\model\TipoPagamento;
use App\model\Pagamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class VendaController extends Controller
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
        $venda = Venda::create($request->except('_token'));

        $pagamentos = TipoPagamento::where('id',$request['tipo_pagamento_id'])->get();
        $viagem = Viagem::where('id',$request['viagem_id'])->get();
        $date =  date('Y-m-d H:i:s');
       
        
            if($pagamentos[0]->tipo==0){
                $valor_divisao = ($viagem[0]->valor * $request['quantidade'])/$pagamentos[0]->descricao;
                for ($i=1; $i <= $pagamentos[0]->descricao; $i++) { 
                    // $pagamento = new Pagamento();
                    // $pagamento->valor = $valor_divisao;
                    // // $pagamento->viagem_id= $viagem[0]->id;
                    // // $pagamento->cliente_id= $request['cliente_id'];
                    // $pagamento->descricao= $pagamentos[0]->descricao."x";
                    // $pagamento->empresa_id= 1;
                    // $pagamento->vencimento= date('Y-m-d H:i:s');
                    // $pagamento->parcela= $i;
                    // $pagamento->situacao= 1;
                    // $pagamento->pagamento= date('Y-m-d H:i:s');
                    $days = $i * 30 ;
                    $vencimento = date('Y-m-d H:i:s', strtotime($date. ' + '.$days.' days'));
                    $pagamento = [
                        'valor' => $valor_divisao,
                        // 'viagem_id'=> $viagem[0]->id,
                        // 'cliente_id'=> $request['cliente_id'],
                        'descricao'=> $pagamentos[0]->descricao,
                        'empresa_id'=> 1,
                        'vencimento'=> $vencimento,
                        'parcela'=> $i,
                        'situacao'=> 1,
                        'pagamento'=>date('1900-01-01'),
                        'venda_id'=>$venda['id']
                    ];
                Pagamento::create($pagamento);

                }
                //criar parcelas c/ vencimento
                //realizar um for c/ a quantidade de pagamentos em $pagamentos[0]->descricao,
                //gerar uma parcela p/ cada
                //vencimento alterando apenas o mes
                //parcela gerada pelo index
                
            }else{
                //pgamento a vista
                $pagamento = [
                    'valor' => $viagem[0]->valor *  $request['quantidade'] ,
                    // 'viagem_id'=> $viagem[0]->id,
                    // 'cliente_id'=> $request['cliente_id'],
                    'descricao'=> $pagamentos[0]->descricao,
                    'empresa_id'=> 1,
                    'vencimento'=> date('Y-m-d H:i:s'),
                    'parcela'=> 1,
                    'situacao'=> 1,
                    'pagamento'=> date('Y-m-d H:i:s'),
                    'venda_id'=>$venda['id']
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
