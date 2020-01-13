<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
        $segments = request()->segments();
        if (sizeof($segments) == 2){
            return [
                'email' => 'required|email|unique:clients,email',
                'name' => 'required',
                'phone' => 'required',
                'adults' => 'required',
                'children' => 'required',
                'infants' => 'required',
                'package_id' => 'exists:packages,id',
            ];
        }
        else if (sizeof($segments) == 3){
            return [
                'email' => 'email|unique:clients,email',
                'name' => '',
                'phone' => '',
                'adults' => '',
                'children' => '',
                'infants' => '',
                'package_id' => 'exists:packages,id',
            ];
        };
    }
}
