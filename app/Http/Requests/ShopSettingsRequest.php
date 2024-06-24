<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopSettingsRequest extends FormRequest
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
            'name'=>['nullable', 'string', 'max:100','unique:shops,name'],
            'address'=>['nullable', 'string', 'max:200'],
            'messenger'=>['nullable', 'string', 'max:255'],
            'facebook'=>['nullable', 'string', 'max:255'],
            'instagram'=>['nullable', 'string', 'max:255'],
            'youtube'=>['nullable', 'string', 'max:255'],
            'email'=>['nullable', 'email', 'max:255','unique:shops,email'],
            'password'=>['nullable', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'მაღაზიის დასახელება სავალდებულოა',
            'name.string'=>'მაღაზიის დასახელება უნდა იყოს ტექსტი',
            'name.max'=>'მაღაზიის დასახელება:  დასაშვებია მაქსიმუმ 30 სიმბოლო',
            'name.unique'=>'მაღაზიის დასახელება: უკვე არსებობს',
            'address.string'=>'მისამართის უნდა იყოს ტექსტი',
            'address.max'=>'მისამართი: დასაშვებია მაქსიმუმ 65 სიმბოლო',
            'messenger.max'=>'messenger: გადააჭარბეთ დასაშვებ სიმბოლოთა რაოდენობას',
            'facebook.max'=>'facebook: გადააჭარბეთ დასაშვებ სიმბოლოთა რაოდენობას',
            'instagram.max'=>'instagram: გადააჭარბეთ დასაშვებ სიმბოლოთა რაოდენობას',
            'youtube.max'=>'youtube: გადააჭარბეთ დასაშვებ სიმბოლოთა რაოდენობას',
            'email.required' => 'მეილის მითითება სავალდებულოა',
            'email.string' => 'მეილის არასწორი ფორმატი',
            'email.email' => 'მეილის არასწორი ფორმატი',
            'email.max' => 'მეილი არ უნდ აღემატებოდეს 255 სიმბოლოს',
            'email.unique' => 'ანგარიში ამ მეილით უკვე რეგისტრირებულია',
            'password.required' => 'პაროლის მითითება სავალდებულოა',


        ];
    }
}

