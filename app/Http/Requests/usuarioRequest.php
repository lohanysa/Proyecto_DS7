<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'usuario' => 'required|string|max:255',
        'correo' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'nombre_contacto' => 'required|string|max:255',
        'nombre_restaurante' => 'required|string|max:255',
        'imagen_fondo' => 'required|url',
        'logo_empresa' => 'required|url',
        'tipo_usuario' => 'required|in:1,2',
        'status' => 'required|in:1,2',
        ];
    }

    public function messages(): array
    {
        return [
        'usuario.required' => 'El campo usuario es obligatorio.',
        'correo.required' => 'El campo correo es obligatorio.',
        'correo.email' => 'El campo correo debe ser una dirección de correo válida.',
        'correo.unique' => 'El correo ya está registrado.',
        'password.required' => 'El campo contraseña es obligatorio.',
        'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        'nombre_contacto.required' => 'El campo nombre es obligatorio.',
        'nombre_restaurante.required' => 'El campo restaurante es obligatorio.',
        'imagen_fondo.required' => 'El campo imagen de fondo es obligatorio.',
        'imagen_fondo.url' => 'El campo imagen de fondo debe ser una URL válida.',
        'logo_empresa.required' => 'El campo logo empresa es obligatorio.',
        'logo_empresa.url' => 'El campo logo empresa debe ser una URL válida.',
        'tipo_usuario.required' => 'El campo tipo de usuario es obligatorio.',
        'tipo_usuario.in' => 'El tipo de usuario seleccionado es inválido.',
        'status.required' => 'El campo status es obligatorio.',
        'status.in' => 'El status seleccionado es inválido.',
        ];
    }
}
