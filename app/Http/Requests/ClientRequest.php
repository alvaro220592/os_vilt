<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cpf_cnpj' => 'required|unique:people,cpf_cnpj,' . $this->id . 'id',
            'nome' => 'required'
        ];
    }

    public function messages(){
        return [
            'cpf_cnpj.required' => 'O CPF/CNPJ é obrigatório',
            'cpf_cnpj.unique' => 'CPF/CNPJ já cadastrado',
            'nome.required' => 'O nome é obrigatório'
        ];
    }
}
