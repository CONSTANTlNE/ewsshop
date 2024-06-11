<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductStoreRequest extends FormRequest
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
            'name'          => 'required|string|max:45',
            'price'         => 'required|numeric',
            'description'   => 'required|string|max:255',
            'main_page'     => 'nullable|string|in:on',
            'category_gallery' => 'nullable|string|in:on',
            'category'      => 'sometimes|integer|exists:categories,id',
            'SKU'           => 'nullable|string|max:30',
            'new_spec'      => 'sometimes|array',
            'new_spec.*'    => 'sometimes|string|max:30',
            'new_value'     => 'sometimes|array',
            'new_value.*'   => 'sometimes|string|max:30',
            'old_spec'      => 'sometimes|array',
            'old_spec.*'    => 'sometimes|string|max:30',
            'old_value'     => 'sometimes|array',
            'old_value.*'   => 'sometimes|string|max:30',
            'old_spec_id'   => 'sometimes|array',
            'old_spec_id.*' => 'sometimes|integer|exists:specs,id',
            'image1'        => [Rule::requiredIf(function () {
                return request()->routeIs('product.store');
            }), 'string'],
            'image_1'       => 'nullable|string',
            'image2'        => 'nullable|string',
            'image3'        => 'nullable|string',
            'image4'        => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'პროდუქტის დასახელება სავალდებულოა',
            'name.string'          => 'დასახელება უნდა უნდა იყოს ტექსტი',
            'name.max'             => 'პროდუქტის დასახელება არ უნდა აღემატებოდეს 15 სიმბოლოს',
            'price.required'       => 'ფასის მითითება სავალდებულოა',
            'price.numeric'        => 'ფასი უნდა იყოს რიცხვითი მნიშვნელობა',
            'description.required' => 'პროდუქტის აღწერა სავალდებულოა',
            'description.string'   => 'აღწერა უნდა იყოს ტექსტი',
            'description.max'      => 'აღწერა არ უნდა აღემატებოდეს 80 სიმბოლოს',
            'main_page.string'     => 'შეუსაბამო მნიშვნელობა საერთო გალერიის არჩევისას',
            'main_page.in'         => 'შეუსაბამო მნიშვნელობა საერთო გალერიის არჩევისას',
            'category_gallery.string'     => 'შეუსაბამო მნიშვნელობა კატეგორიის გალერიის არჩევისას',
            'category_gallery.in'         => 'შეუსაბამო მნიშვნელობა კატეგორიის გალერიისა რჩევისას',
            'category.integer'     => 'აირჩიეთ შესაბამისი კატეგორია',
            'category.exists'      => 'კატეგორია არ მოიძებნა',
            'SKU.string'           => 'პროდუქტის კოდი უნდა იყოს ტექსტი',
            'SKU.max'              => 'პროდუქტის კოდი არ უნდა აღემატებოდეს 10 სიმბოლოს',
            'new_spec'             => 'სრულად შეავსეთ ან წაშალეთ სპეციფიკაცია',
            'new_spec.*.string'    => 'სპეციფიკაცია უნდა იყოს ტექსტი',
            'new_spec.*.max'       => 'სპეციფიკაცია არ უნდა იყოს 10 სიმბოლოზე მეტი',
            'new_value'            => 'სრულად შეავსეთ ან წაშალეთ სპეციფიკაცია',
            'new_value.*.string'   => 'ინფორმაცია უნდა იყოს ტექსტი',
            'new_value.*.max'      => 'ინფორმაცია არ უნდა იყოს 10 სიმბოლოზე მეტი',
            'image1.required'      => 'ფოტო 1 სავალდებულოა',
            'image1.string'        => 'ფოტო 1 უნდა იყოს ფოტომედია ფორმატი',
            'image_1.string'       => 'ფოტო 1 უნდა იყოს ფოტომედია ფორმატი',
            'image2.string'        => 'ფოტო 2 უნდა იყოს ფოტომედია ფორმატი',
            'image3.string'        => 'ფოტო 3 უნდა იყოს ფოტომედია ფორმატი',
            'image4.string'        => 'ფოტო 4 უნდა იყოს ფოტომედია ფორმატი'
        ];
    }
}
