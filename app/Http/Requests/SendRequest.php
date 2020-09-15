<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'message' => 'required|string',
            'ip' => 'required|unique:messages,ip'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'message.required' => __('Message text is required'),
            'message.unique' => __('You have already send a message'),
        ];
    }
}
