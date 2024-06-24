<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeMobileRequest extends FormRequest
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
            'mobile'=>['required', 'numeric', 'digits:9','regex:/^5/'],
        ];
    }


    public function messages(): array
    {
        return [
            'mobile.required'=>'მობილურის მითითება სავალდებულოა',
            'mobile.numeric'=>'მობილური უნდა იყოს რიცხვითი მნიშვნელობა',
            'mobile.digits'=>'მობილური უნდა შედგებოდეს 9 სიმბოლოსგან',
            'mobile.regex'=>'მობილური უნდა უნდა იწყებოდეს 5-ით',
        ];
    }
}
