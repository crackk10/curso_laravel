<?php

namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
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
        return [
            /*el campo nombre es unico y tiene como parametros menu(tabla) y nombre(campo)
            con el .$this->route('id') evita se repita el nombre de otro registro */
            'nombre'=>'required|max:50|unique:menu,nombre' . $this->route('id'),
            
            /*url tiene 3 reglas, la ultima es una regla invocada */
            'url'=>['required','max:100',new ValidarCampoUrl],
            'icono'=>'nullable|max:50'
         
            //
        ];  
    }
/*
    public function messages()
    {
        return [
            'nombre.required'  => 'El campo nombre es requerido con maximo 50 caracteres',
            'url.required' => 'el campo url es requerido con maximo 50 caracteres',
        ];
    }
*/
}
