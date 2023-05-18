<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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

            'classroom_id' => [
                'required',
                'integer'
            ],
            'subject_id' => [
                'required'
            ],
            'first_name' => [
                'required',
                'string'
            ],
            'last_name' => [
                'required',
                'string'
            ],
            'gender' => [
                'string'
            ],
            'age' => [
                'required',
                'integer'
            ],
            'email' => [
                'required'
            ],

        ];
    }
}
