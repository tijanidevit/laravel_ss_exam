<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    public function rules() : array
    {
        return [
            'reg_no' => 'required|unique:students',
            'fullname' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'form_id' => 'required',
        ];
    }

    public function message() : array
    {
        return [
            'reg_no.unique' => 'An account already exists with this reg_no',
        ];
    }
}
