<?php

namespace App\Http\Requests\Teacher;

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
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            'email' => 'required|email|unique:users',
            'staff_id' => 'required|unique:teachers',
            'fullname' => 'required',
            'password' => 'required|password|min:6',
            'image' => 'required|min:6',
            'bio' => 'sometimes|required',
        ];
    }

    public function message() : array
    {
        return [
            'email.unique' => 'An account already exists with this email',
            'staff_id.unique' => 'An account already exists with this staff_id',
        ];
    }
}
