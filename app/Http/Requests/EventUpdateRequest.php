<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       return [

            'title' => 'required|max:255',

            'short_description' => 'nullable',

            'description' => 'required',

            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'location' => 'required|max:255',

            'event_start_date' => 'required|date',

            'event_end_date' => 'nullable|date|after_or_equal:event_start_date',

            'organizer' => 'nullable|max:255',

            'registration_link' => 'nullable|url',

            'contact_email' => 'nullable|email',

            'contact_phone' => 'nullable|max:30',

            'meta_title' => 'nullable|max:255',

            'meta_description' => 'nullable',

            'status' => 'required',
        ];
    }
}
