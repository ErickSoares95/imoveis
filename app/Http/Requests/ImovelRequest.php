<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
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
            "name" => "required|string",
            "terreno" => "required|integer",
            "salas" => "required|integer",
            "banheiros" => "required|integer",
            "dormitorios" => "required|integer",
            "garagens" => "required|integer",
            "descricao" => "required|string",
            "preco" => "required|float",
            "cidade_id" => "required|integer",
            "tipo_id" => "required|integer",
            "finalidade_id" => "required|integer",
        ];
    }
}