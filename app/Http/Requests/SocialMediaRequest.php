<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialMediaRequest extends FormRequest
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
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
            'instagram' => 'nullable|url',
            'viber' => 'nullable|url',
            'whatsapp' => 'nullable|url',
        ];
    }
}
