<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required | min:3',
            'description' => 'required | min:8',
            'price' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Devi inserire il nome del prodotto',
            'description.required' => 'Devi inserire la descrizione del prodotto',
            'price.required' => 'Devi inserire il prezzo del prodotto',
            'name.min' => 'Il nome deve contenere almeno 3 caratteri',
            'description.min' => 'Il messaggio deve contenere almeno 8 caratteri'
        ];
    }

}
