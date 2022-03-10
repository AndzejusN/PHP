<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
//    /**
//     * Determine if the user is authorized to make this request.
//     *
//     * @return bool
//     */
//    public function authorize()
//    {
//        return auth()->guest();
//        return auth()->guest();
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => ['required', 'exists:App\Models\Category,id'],
            'model' => 'required|max:30',
            'active' => 'required|numeric',
            'name' => 'required|max:50',
            'price' => 'required|numeric',
        ];
    }
}
