<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatepropertyRequest extends FormRequest
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
            'property' => 'required|string',
            'characteristic' => 'required|string',
            'home' => 'required|string',
            'weakness' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            "property.required" => "派系必填",
            "characteristic.required" => "特性必填",
            "home.required" => "主場必填",
            "weakness.required" => "弱點屬性必填"


        ];
    }
}
