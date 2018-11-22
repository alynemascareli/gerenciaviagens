<?php

namespace App\Http\Controllers;

use App\model\Pagamento;
use Illuminate\Support\Facades\Auth;
use App\model\Venda;
use App\model\Viagem;

use Illuminate\Http\Request;

class PagamentoController extends Controller
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
        $vendas = Venda::join('pagamento','venda_id', 'venda.id')->where('pagamento.pagamento', date('1900-01-01 00:00:00'))->get();
        $titulo = "Pagamentos à receber";
        return view('/pagamento/index', compact('vendas', 'titulo'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viagem = Viagem::get();        
        return view('/pagamento/create', compact( 'viagem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pagamento::create($request->except('_token'));
        
        return redirect('/pagamento');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\model\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function show(Pagamento $pagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagamento $pagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function up(Request $request)
    {
        $pagamento = Pagamento::find($request['id']);

        $request['valor'] = $pagamento['valor'];        
        $request['descricao'] = $pagamento['descricao'];
        $request['empresa_id'] = $pagamento['empresa_id'];
        $request['vencimento'] = $pagamento['vencimento'];
        $request['parcela'] = $pagamento['parcela'];
        $request['situacao'] = 0;
        $request['pagamento'] = $pagamento['pagamento'];
        $request['venda_id'] = $pagamento['venda_id'];

        Pagamento::edit($pagamento,$request->except('_token','id'));

        return redirect('/pagamento');
    }
    public function update(Request $request)
    {

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagamento $pagamento)
    {
        //
    }
    public function recebidos()
    {
        $vendas = Venda::join('pagamento','venda_id', 'venda.id')->where('pagamento.pagamento','!=' ,date('1900-01-01 00:00:00'))->get();
        $titulo = "Pagamentos já recebidos";
       
        return view('/pagamento/index', compact('vendas','titulo'));
    }
}
