<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class InspectionNoteRequest extends FormRequest
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
            'examiner'=>'required|max:225',               
            'date'=>'required|max:225', 
            'complaint'=>'required|max:225', 
            'uk_mg'=>'required|max:225', 
            'bb_kg'=>'required|max:225', 
            'td_mmhg'=>'required|max:225', 
            'lila_cm'=>'required|max:225', 
            'fundus_hight'=>'required|max:225', 
            'fetus_location'=>'required|max:225',
            'immunization'=>'required|max:225',
            'add_blood_tablet'=>'required|max:225',
            'lab'=>'required|max:225', 
            'analysis'=>'required|max:225',
            'governance'=>'required|max:225',
            'counseling'=>'required|max:225'
        ];
    }
}
