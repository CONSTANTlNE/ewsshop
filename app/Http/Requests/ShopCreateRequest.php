<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopCreateRequest extends FormRequest
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
            'shop' => 'required|string|max:50|unique:shops,name',
            'address' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {

        return [
            'shop.required'=>'დასახელება სავალდებულოა',
            'shop.unique'=>'მაღაზია ამ დასახელებით უკვე არსებობს',
            'shop.max'=>'დასახელება: დასაშვებია მაქსიმუმ 50 სიმბოლო',
            'address.max'=>'მისამართი: დასაშვებია მაქსიმუმ 100 სიმბოლო',
            'description.max'=>'აღწერა: დასაშვებია მაქსიმუმ 255 სიმბოლო',

        ];

    }
}
