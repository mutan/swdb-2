<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCardRequest extends FormRequest
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
        return [
            'name' => 'required|max:100',
            'number' => 'required|integer',
            'edition_id' => 'required',
            'rarity_id' => 'required',
            'artist' => 'required',
            'race' => 'required|',
            'type' => 'required',
            'firepower' => 'nullable|integer',
            'defence' => 'nullable|integer',
            'energy' => 'nullable|integer',
            'strategy_points' => 'nullable|integer',
            'dopotsek' => 'nullable|integer',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        $required_ru = 'Это поле должно быть заполнено.';
        $integer_ru = 'В этом поле могут быть только цифры.';

        return [
            'name.required' => $required_ru,
            'name.max'  => 'Название не может быть длиннее 100 символов.',
            'number.required' => $required_ru,
            'number.integer'  => $integer_ru,
            'artist.required' => $required_ru,
            'edition_id.required' => $required_ru,
            'race.required' => $required_ru,
            'rarity_id.required' => $required_ru,
            'type.required' => $required_ru,
            'firepower.integer'  => $integer_ru,
            'defence.integer'  => $integer_ru,
            'energy.integer'  => $integer_ru,
            'strategy_points.integer'  => $integer_ru,
            'dopotsek.integer'  => $integer_ru,
        ];
    }
}
