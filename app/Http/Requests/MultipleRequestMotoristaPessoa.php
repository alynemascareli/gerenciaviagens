<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Model\Pessoa;
use App\Model\Motorista;


class MultipleRequestMotoristaPessoa extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $formRequests = [
            PessoaRequest::class,
            RequestMotorista::class
        ];

        $rules = [];

        foreach ($formRequests as $source) {
            $rules = array_merge(
                $rules, (new $source)->rules()
            );
        }

        return $rules;
    }

    public function messages()
    {
        return[
            'required' => 'O campo ":attribute" é obrigatório!'
        ];
    }
}
