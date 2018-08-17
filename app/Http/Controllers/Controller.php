<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\model\Empresa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use View;
use Cookie;


class Controller extends BaseController
{   
    use ValidatesRequests;

    protected $validation = [];
    protected $attributes = [];
    protected $errors;
    protected $code = 200;
    protected $content;

    public static $configid = 0;       
    public static $footer=[];
    
    public function __construct(Request $request)
    {
        $domain = url('/');
        $config = Empresa::where('dominio','=',$domain)->first();
        // dd($domain, $config);

        if($config == null){
            return view('error404');
        }else{
        	self::$configid = $config->id;
        	View::share('color', $config->color);
            View::share('theme', $config->theme);

            View::share('title', $config->nome);
            View::share('logo', $config->logotipo);
        }
    }

    protected function validateForm(\Illuminate\Http\Request $request) {

        $validation = \Validator::make($request->all(), $this->validation, [], $this->attributes);

        if ($validation->fails()) {
            $this->code = 422;
            $this->errors = $validation->errors();
            return false;
        }

        return true;
    }

    protected function respondWithErrors($message = '', $code = 422) {
        if ($message)
            $this->errors = $message;

        if ($code)
            $this->code = $code;

        return json_encode($this->errors, $this->code);
    }

    protected function response() {
        return json_encode($this->errors);
    }
}