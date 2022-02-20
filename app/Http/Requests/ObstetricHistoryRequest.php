<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ObstetricHistoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'pregnancy_to'=>'required|integer' , 
            'year'=>'required|max:225' , 
            'still_born'=> 'required|max:225', 
            'aterm_born'=>'required|max:225' , 
            'spontant_born'=>'required|max:225' , 
            'weight_height'=>'required|max:225' , 
            'maternity_place'=>'required|max:225' , 
            'condition'=>'required|max:225' ,
            'complication'=>'required|max:225'
        ];
    }
}
