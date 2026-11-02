<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutusRequest extends FormRequest
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
            'image' => [$this->route('id') ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,gif,webp', 'max:4096'],
            'description' => 'required',
        ];
    }
}
