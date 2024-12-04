<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteStoreRequest extends FormRequest
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
            "full_name"    => 'required|string|max:255',
            "company"      => "sometimes|string|max:255",
            "phone_number" => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10",
            "email"        => "required|email|unique:notes,email,except,full_name",
            "birth_date"   => "sometimes|date|before:" . now()->subYears(18)->toDateString(),
            "photo_url"    => 'sometimes|url'
        ];
    }
}
