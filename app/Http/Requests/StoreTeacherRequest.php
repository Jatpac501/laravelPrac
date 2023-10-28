<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string|max:100',
            'surname'=>'required|string|max:100',
            'email'=>'required|string|max:1024',
            'phone'=>'required|string|regex:/^\+7\d{10}$/',
            'group_id'=>'integer|nullable|exists:groups,id'
        ];
    }
}
