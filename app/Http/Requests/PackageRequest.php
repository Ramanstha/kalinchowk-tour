<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'destination' => 'required',
            'image' => [$this->route('id') ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,gif,webp', 'max:4096'],
            'days' => 'required|integer|min:1',
            'price1' => 'nullable|integer|min:0',
            'price2' => 'nullable|integer|min:0',
            'description' => 'required',
        ];
    }
}
