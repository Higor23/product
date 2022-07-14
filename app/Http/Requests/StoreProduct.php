<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determina se o usuário está autorizado para fazer a request
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Valida a request por meio das regras 
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'             => ['required'],
            'encryption_key' => ['required'],
            'value'          => ['required']
        ];
    }
}
