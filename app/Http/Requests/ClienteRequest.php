<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

         $rules = [
            'tipo' => 'required',
         ];
         if ($this->tipo === 'natural') {
             $rules = array_merge($rules, [
                 'dni' => 'required|unique:cliente_natural,dni|min:7|max:8',
                 'nombre' => 'required',
                 'apellido' => 'required',
                 'emailnatural' => 'required|unique:cliente_natural,email',
                 'telefononatural' => 'required',
                 'direccionnatural' => 'required',
             ]);
         } else {
             $rules = array_merge($rules, [
                 'RUC' => 'required|unique:cliente_juridico,ruc',
                 'razonSocial' => 'required|unique:cliente_juridico,razonSocial',
                 'direccion' => 'required|unique:cliente_juridico,direccion',
                 'telefono' => 'required',
                 'email' => 'required',
                 'encargado' => 'required',
             ]);
         }
            return $rules;

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        $message = [
            'tipo.required' => 'El tipo de cliente es requerido'

        ];

        if ($this->tipo === 'natural') {
            $message = array_merge($message, [
                'dni.required' => 'El DNI es requerido',
                'dni.unique' => 'El DNI ya existe',
                'nombre.required' => 'El nombre es requerido',
                'apellido.required' => 'El apellido es requerido',
                'emailnatural.required' => 'El email es requerido',
                'emailnatural.unique' => 'El email ya existe',
                'telefononatural.required' => 'El telefono es requerido',
                'direccionnatural.required' => 'La direccion es requerida',
            ]);
        } else {
            $message = array_merge($message, [
                'RUC.required' => 'El RUC es requerido',
                'RUC.unique' => 'El RUC ya existe',
                'razonSocial.required' => 'La razon social es requerida',
                'razonSocial.unique' => 'La razon social ya existe',
                'direccion.required' => 'La direccion es requerida',
                'direccion.unique' => 'La direccion ya existe',
                'telefono.required' => 'El telefono es requerido',
                'email.required' => 'El email es requerido',
                'encargado.required' => 'El encargado es requerido',
            ]);
        }
        return $message;
    }
}
