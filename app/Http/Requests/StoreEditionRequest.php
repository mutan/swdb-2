<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEditionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $edition_id = $this->route('edition') ? $this->route('edition')->id : null;

        return [
            'name' => [
                'required', 'max:100', Rule::unique('editions')->ignore($edition_id)
            ],
            'amount' => 'nullable|integer',
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Не может быть пустым',
            'name.unique' => 'Такое название уже есть в базе данных. Название должно буть уникальным.',
            'name.max'  => 'Не может быть длиннее 100 символов',
            'amount.integer'  => 'Может содержать только цифры',
        ];
    }
}
