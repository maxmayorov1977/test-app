<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    public function authorize()
    {
        return TRUE;
    }

    public function rules()
    {
        return [
            'vendor_id' => 'required',
            'model_name' => 'required|string|min:2|max:20',
            'year_release' => 'required',
            'horse_power' => 'required',
            'transmission_id' => 'required',
        ];
    }
}
