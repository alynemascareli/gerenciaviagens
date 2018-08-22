<?php

namespace App\model;

use App\model\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $hidden = ['created_at', 'updatade_at', 'deleted_at'];


 protected $with = ['endereco'];

     public function endereco(){
        return $this->hasOne(Endereco::class, 'id_empresa','id');
    }
    public static function create(Array $data)
    {
        $empresa = new Empresa();
        self::setData($empresa, $data);
        return $empresa;
    }

    public static function edit(Empresa $empresa, Array $data)
    {
        self::setData($empresa, $data);

        return $empresa;
    }

    public static function setData(Empresa &$empresa, $data)
    {
        $empresa->nome = $data['nome'];
        $empresa->cnpj = $data['cnpj'];
        $empresa->nome_contato = $data['nome_contato'];
        $empresa->dominio = $data['dominio'];
        $empresa->telefone_contato = $data['telefone_contato'];
        $empresa->endereco_contato = $data['endereco_contato'];
        $empresa->numero_contato = $data['numero_contato'];
        $empresa->cidade_contato = $data['cidade_contato'];
        $empresa->estado_contato = $data['estado_contato'];

        $empresa->save();
    }
}