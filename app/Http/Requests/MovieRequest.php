<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required',
            'director' => 'required',
            'plot' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'director.required' => 'Who directed this film?',
            'plot.required' => 'A short summary will do',
        ];
    }
}
