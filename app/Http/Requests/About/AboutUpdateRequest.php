<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'about_paragraph' => 'required|string|min:100|max:250', 
            'project_management' => 'required|string|min:100|max:250', 
            'design_approach' => 'required|string|min:100|max:250', 
            'innovative_solutions' => 'required|string|min:100|max:250', 
            'years_of_experienece' => 'required', 
        ];
    }
}
