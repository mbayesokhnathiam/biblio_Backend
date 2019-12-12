<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtatRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
