<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatepokemonsRequest extends FormRequest
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
            'name'=>'required',
                    'team_num'=>'required',
                    'height'=>'required',
                    'weight'=>'required',
                   'growing'=>'required',
                   'group'=>'required',
                   'place'=>'required'
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"寶可夢名稱必填",
            "team_num.required"=>"屬性必填",
            "height.required"=>"身高必填",
           "weight.required" =>"體重必填",
           "growing.required" =>"進化可能必填",
            "group.required"=>"地區必填",
           "place.required" =>"出現場所必填"

        ];
    }
}
