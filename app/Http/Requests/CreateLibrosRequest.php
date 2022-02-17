<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLibrosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Permisos de usuarios
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
            'id_libro' => 'required',
            'autor'    => 'required | max:40',
            'nombre'   => 'required | min:10'
           ];
    }
    //Personalizar el name de ese input
    public function attributes()
    {
        return [
            'id_libro' => 'ID Libro'
        ];
    }
    //Personalizar todo el mensaje
    public function messages()
    {
        return[
            'autor.required.max' => 'Esto personaliza todo el mensaje como tal de la validacion'
        ];
    }
}
