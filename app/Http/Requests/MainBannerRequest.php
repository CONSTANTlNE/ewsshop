<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainBannerRequest extends FormRequest
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
            'mainbanner_image' => 'nullable|string',
            'bannertext'       => 'sometimes|string|max:90',
        ];
    }

    public function messages()
    {
        return [
            'bannertext.string'     => 'სათაური უნდა შედგებოდეს ასოებისგან',
            'bannertext.max'        => 'სათაური არ შეიძლება იყოს 90 სიმბოლოზე მეტი',
        ];
    }
}
