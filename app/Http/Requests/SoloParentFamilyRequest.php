<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoloParentFamilyRequest extends FormRequest
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
        return ['city' => 'required',
        'brgy' => 'required',
        'street' => 'required',
        'house_number' => 'required',
        'family_name' => 'required',
        'gender_head_family' => 'required',
        'bod_head_family' => 'required',
        'head_family' => 'required',
        'first_child' => 'required',
        'gender_first_child' => 'required',
        'bod_first_child' => 'required',
        'spouse' => 'nullable',
        'gender_spouse' => 'nullable',
        'bod_spouse' => 'nullable',
    
            //
        ];
    }
}
