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
            'age' => 'required|numeric',
            'date' => 'required|date',
            'phone' => 'required|numeric',
            'web' => 'required|string',
            'address' => 'required|string'
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
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.numeric' => 'Vui lòng kiểm tra lại số điện thoại',
            'web.required' => 'web không đc để trống',
            'web.string' => 'Vui lòng nhập đường dẫn hợp lệ',
            'address.required' => 'Địa chỉ tháng không đc để trống',
            'address.string' => 'Vui lòng nhập lại địa chỉ'
        ];
    }
}
