<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
            'address' => 'required|string|min:10|max:100', 
            'phone' => 'required|string|min:10|max:100', 
            'email' => 'required|string|min:10|max:100', 
            'longitude' => 'required|string|min:10|max:100', 
            'latitude' => 'required|string|min:10|max:100', 
            'facebook_link' => 'required|string|min:10|max:100', 
            'instagram_link' => 'required|string|min:10|max:100', 
            'linkedin_link' => 'required|string|min:10|max:100', 
            'whatsapp_link' => 'required|string|min:10|max:100', 
            'twitter_link' => 'required|string|min:10|max:100', 
            'created_by' => 'required|string|min:10|max:100'
        ];
    }
}
