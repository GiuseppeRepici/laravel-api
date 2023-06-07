<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTypeRequest extends FormRequest
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
            'type' => ['required','max:150', Rule::unique('types')]
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'La tipologia è richiesta',
            'type.max' => 'La tipologia non deve superare :max caratteri'
        ];
    }
}
