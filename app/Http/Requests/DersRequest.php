<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dersadi' => ['required'],
            'derskonusu' => ['required'],
            'ogretmenadi' => ['required'],
            'telefonnumarasi' => ['required'],
            'image' => ['required', 'image'],
        ];
    }
}
