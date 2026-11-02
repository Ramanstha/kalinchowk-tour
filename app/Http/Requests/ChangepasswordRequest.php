<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangepasswordRequest extends FormRequest
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
            'oldpassword'=>'required',
            'newpassword'=>'required|min:8|same:confirmpassword',
            'confirmpassword'=>'required'
        ];
    }
}
