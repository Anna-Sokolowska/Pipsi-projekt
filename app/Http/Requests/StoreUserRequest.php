<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string', 'max:255',
            'last_name' => 'string', 'max:255',
            'gender' => 'in:male,female',
            'date_of_birth' => 'date', 'before:today',
            // 'city' => 'string',
            // 'country' => 'string',
            // 'phone' => 'string',
        ];
    }
}
