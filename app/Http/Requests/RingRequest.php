<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ring_description' => 'required|min:3|max:30',
            'ring_reference' => ['required', 'min:10'],
            'ring_material' => 'required|in:Gold,Silver,Bronze',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }
}
