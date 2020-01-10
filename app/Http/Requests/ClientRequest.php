<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
                'telephone' => 'required',
                'adults' => 'required',
                'children' => 'required',
            ];
        }
        else if (sizeof($segments) == 3){
            return [
                'email' => 'email|unique:clients,email,'.$segments[2],
                'name' => '',
                'telephone' => '',
                'adults' => '',
                'children' => '',
            ];
        }
    }
}
