<?php

namespace App\Http\Requests\FormTeacher;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
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
            'form_id' => [
                'required',
                Rule::exists('forms', 'id')->where('id', $this->form_id)
            ]
        ];
    }

    public function message() : array
    {
        return [
            
        ];
    }
}
