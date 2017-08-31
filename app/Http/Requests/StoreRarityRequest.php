<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRarityRequest extends FormRequest
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
        $rarity_id = $this->route('rarity') ? $this->route('rarity')->id : null;

        return [
            'name' => [
                'required', 'max:100', Rule::unique('rarities')->ignore($rarity_id)
            ],
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
            'name.required' => 'Название не может быть пустым',
            'name.unique' => 'Такое название уже есть в базе данных. Название должно буть уникальным.',
            'name.max'  => 'Название не может быть длиннее 100 символов',
        ];
    }
}
