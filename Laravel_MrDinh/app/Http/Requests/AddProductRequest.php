<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'Name' => 'required | string',
            'Price' => 'required | min:1 | numeric',
            'PromotionPrice' => 'required | min:10000 | numeric',
            'Unit' => 'required | string',
            'New' => 'numeric',
            'Type' => 'required | numeric',
        ];
    }
}
