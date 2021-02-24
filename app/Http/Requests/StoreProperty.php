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
            'name' => 'required|max:20',
            'type' => 'required|max:20',
            'location' => 'required|max:20',
            'agent' => 'required|max:20',
            'price' => 'required',
            'bed' => 'required|integer|max:20',
            'bath' => 'required|integer|max:5',
            'garage' => 'required|integer|max:2',
            'area' => 'required|integer|max:1000',
            'summary' => 'required|max:1000',
            'description' => 'required|max:1000',
            'image'=>'required|image'
        ];
    }
}
