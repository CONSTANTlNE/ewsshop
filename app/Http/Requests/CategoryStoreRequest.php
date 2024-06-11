<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => 'required|string|max:45',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'დასახელება სავალდებულოა',
            'name.string' => ' დასახელება უნდა იყოს ტექსტი',
            'name.max' => 'დასახელება არ უნდა აღემატებოდეს 15 სიმბოლოს',
        ];
    }
}
