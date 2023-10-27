<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string|max:30',
            'course'=>'required|integer|between:1,5',
            'faculty'=>'required|string|max:1024',
        ];
    }
}
