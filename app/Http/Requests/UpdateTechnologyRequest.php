<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTechnologyRequest extends FormRequest
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
            'name' => ['required','max:150', Rule::unique('technologies')]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è richiesto',
            'name.max' => 'Il nome non deve superare :max caratteri'
        ];
    }
}
