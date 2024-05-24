<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VolunteerUpdateRequest extends FormRequest
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
        $events = Event::pluck('id');

        return [
            'first_name'        => ['required', 'string', 'max:100'],
            'last_name'         => ['required', 'string', 'max:500'],
            'email'             => ['required', 'email', 'max:500'],   
            'phone_number'      => ['required', 'string', 'max:500'],

            'bio'               => ['required', 'string', 'max:500'],
            'age'               => ['required', 'string', 'max:500'],
            
            't_shirt_size'      => ['string', 'max:500'],
            'question1'         => ['string', 'max:500'],
            'question2'         => ['string', 'max:500'],
            'question3'         => ['string', 'max:500'],

            'event_id' => ['required', Rule::in($events)], 
        ];
    }
}
