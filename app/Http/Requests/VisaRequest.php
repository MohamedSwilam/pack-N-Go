<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisaRequest extends FormRequest
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
                'country_name' => 'required',
                'price' => 'required',
                'currency' => 'required',
                'extraction_time' => 'required',
                'visit_time' => 'required',
                'expiry' => 'required',
                'required_documents' => 'required',
                'required_documents.*.description' => 'required',
            ];
        }
        else if (sizeof($segments) == 3){
            return [
                'title' => '',
                'description' => '',
                'price' => 'integer',
                'currency' => '',
                'days' => 'integer',
                'nights' => 'integer',
                'rate' => 'integer',
                'date' => 'date',
                'season' => '',
                'home_page' => 'boolean',
            ];
        }
    }
}
