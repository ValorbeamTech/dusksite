<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class MemberUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'img' => 'required|string|min:2', 
            'profession' => 'required|string|min:5', 
            'name' => 'required|string|min:10', 
            'facebook_link' => 'required|string|min:10',
            'twitter_link' => 'required|string|min:10',
            'instagram_link' => 'required|string|min:10',
        ];
    }
}
