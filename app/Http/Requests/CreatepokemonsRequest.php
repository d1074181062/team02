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
            'name'=>'required|string|min:2|max:20',
                    'team_num'=>'required',
                    'height'=>'required|numeric|min:0.1"|max:999|lt:weight',
                    'weight'=>'required|numeric|min:0.1"|max:999',
                   'growing'=>'required|string|min:1|max:20',
                   'group'=>'required|string|min:1|max:20',
                   'place'=>'required|string|min:1|max:20'
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"寶可夢名稱必填",
            "name.min"=>"名稱至少2個字",
            "team_num.required"=>"屬性必填",
            "height.required"=>"身高必填",
            "height.lt" =>"體重數值需大於身高數值",
           "weight.required" =>"體重必填",
           "growing.required" =>"進化可能必填",
            "group.required"=>"地區必填",
           "place.required" =>"出現場所必填"

        ];
    }
}
