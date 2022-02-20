<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'name'=> 'required|max:255',     
            'date_birth'=> 'required|max:255', 
            'pregnancy_to'=> 'required|integer', 
            'last_chield_age'=> 'required|max:255', 
            'religion'=> 'required|max:255', 
            'education'=> 'required|max:255', 
            'blood_type'=> 'required|max:255', 
            'job'=> 'required|max:255', 
            'bpjs_number'=> 'required|max:255',
            'address'=> 'required|max:255', 
            'phone_number'=> 'required|max:255'
        ];
    }
}
