<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AvailableSeatsRequest extends FormRequest
{
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'from' => 'required|string|exists:cites,name',
            'to' => 'required|string|exists:cites,name'
        ];
    }
}