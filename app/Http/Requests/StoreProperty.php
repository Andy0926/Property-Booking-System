<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProperty extends FormRequest
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
            'name' => 'required',
            'type' => 'required',
            'location' => 'required',
            'agent' => 'required',
            'price' => 'required',
            'bed' => 'required',
            'bath' => 'required',
            'garage' => 'required',
            'area' => 'required',
            'summary' => 'required',
            'description' => 'required'
        ];
    }
}
