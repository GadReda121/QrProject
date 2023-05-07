<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'gender' => ['required', 'alpha'],
            'age' => ['required', 'numeric'],
            'marital_status' => ['required', 'alpha'],
            'id_number' => ['required', 'numeric', 'regex:/\d+/'],
            'phone' => ['required', 'string'],
            'doctor' => ['required', 'string', 'min:3', 'max:255'],
            'doctor_phone' => ['required', 'string'],
            'height' => ['required', 'numeric'],
            'weight' => ['required', 'numeric'],
            'blood' => ['required', 'string'],
            'caretaker_phone' => ['nullable', 'string'],
            'history' => ['required', 'array'],
            'history.allergies' => ['required', 'array'],
            'history.current_medications' => ['required', 'string'],
            'history.immunization' => ['required', 'string'],
            'history.family_history' => ['required', 'string'],
            'history.medical_history' => ['required', 'array'],
            'history.operations_history' => ['required', 'string'],
            'history.additional_comment' => ['required', 'string'],
            'habit' => ['required', 'array'],
            'habit.exercise' => ['required', 'string'],
            'habit.eating_following_a_diet' => ['required', 'string'],
            'habit.alcohol_consumption' => ['required', 'string'],
            'habit.caffeine_consumption' => ['required', 'string'],
            'habit.is_smoke' => ['required', 'boolean'],
        ];
    }

    public function messages()
    {
        return [
            'history.allergies' => 'The Allergies field is required.',
            'history.medical_history' => 'The Medical History field is required.'
        ];
    }
}
