<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nip' => 'required|numeric|digits_between:3,20|unique:employees,nip,' . $this->id,
            "name" => 'required',
            'address' => 'nullable',
            'birth_date' => 'required|date',
            'salary' => 'required|numeric|min:1',
            'phone_number' => 'required|numeric|digits_between:4,15'
        ];
    }
}
