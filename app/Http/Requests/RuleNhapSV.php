<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array 
    {
        return [
            'name' => 'required|string|max:255',
            'age' => 'nullable|numeric',
            'date' => 'required|date',
            'phone' => 'nullable|numeric',
            'web' => 'nullable|string',
            'address' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.string' => 'Vui lòng điền tên cho đúng',
            'age.numeric' => 'Vui lòng nhập tuổi cho đúng',
            'date.required' => 'Ngày tháng không được để trống',
            'date.date' => 'Vui lòng nhập ngày tháng hợp lệ',
            'phone.numeric' => 'Vui lòng kiểm tra lại số điện thoại',
            'web.string' => 'Vui lòng nhập đường dẫn hợp lệ',
            'address.string' => 'Vui lòng nhập lại địa chỉ'
        ];
    }
}
