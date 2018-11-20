<?php

namespace App\model;

use App\model\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $hidden = ['created_at', 'updatade_at', 'deleted_at'];


 protected $with = ['endereco'];

     public function endereco(){
        return $this->hasOne(Endereco::class, 'id_tipo','id');
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
        $empresa->telefone = $data['telefone'];
        $empresa->logotipo = $data['logotipo'];
        $empresa->save();
    }
}