<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birth_date' => 'required_if:image, ==, null',
            'expire_date' => 'required_if:image, ==, null',
            'passport_number' => 'required_if:image, ==, null',
            'passport_name' => 'required_if:image, ==, null',
            'gender' => 'required_if:image, ==, null',
            'nationality' => 'required_if:image, ==, null',
            'image' => '',
        ];
    }
}
