<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    public function authorize()
    {
        return TRUE;
    }

    public function rules()
    {
        return [
            'vendor_id' => 'required',
            'model_name' => 'required|string|min:2|max:30',
            'year_release' => 'required',
            'horse_power' => 'required',
            'transmission_id' => 'required',
        ];
    }
}
