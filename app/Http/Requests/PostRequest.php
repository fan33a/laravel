<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

        // $this->method return the form method
        
        $rule = 'required|extensions:png,jpg,jpeg,svg';
        if($this->method() == 'PUT') {
            $rule = 'nullable|extensions:png,jpg,jpeg,svg';
        }

        return [
            'title' => 'required',
            'image' => $rule,
            'content' => 'required',
        ];
    }
}
