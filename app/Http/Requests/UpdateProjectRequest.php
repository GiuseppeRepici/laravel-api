<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => 'required|min:5|max:150',
            'slug' => 'required',
            'description' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è richiesto',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri',
            'name.max' => 'Il nome non deve superare :max caratteri',
            'slug.required' => 'Lo slug è richiesto'
        ];
    }
}
