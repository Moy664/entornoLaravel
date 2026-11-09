<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|min:5|max:255',
            'slug'=> ['required','min:5','max:255', 'unique:posts'],
            'category'=> 'required',
            'content'=> 'required',
        ];
    }

    //mostrar mensajes personalizados de error
    // public function messages(){
    //     return [
    //         'title.required' => 'El campo :attributes es requerido', //si se le agrega :attributes se pueden combinar los valores attributes con los mensajes personalizados
    //         'slug.required' => 'El campo slug es requerido',
    //         'category.required' => 'El campo category es requerido',
    //         'content.required' => 'El campo content es requerido',
    //     ];
    // }

    public function attributes(): array{
        return [
            'title' => 'name',
        ];
    }
}
