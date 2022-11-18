<?php

namespace App\Http\Requests;

use App\Rules\Document;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'dui' => ['required', 'regex:/^\d{8}-\d{1}$/'],
            'nit' => ['required', new Document],
        ];
    }
}
