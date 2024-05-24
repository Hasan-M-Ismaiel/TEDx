<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterCreateRequest extends FormRequest
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
            'first_name'    => ['required', 'string', 'max:100'],
            'last_name'     => ['required', 'string', 'max:500'],
            'email'         => ['required', 'email', 'max:500'],
            'phone_number'  => ['required', 'string', 'max:500'],

            'profession'    => ['required', 'string', 'max:500'],

            'bio'           => ['required', 'string', 'max:500'],

            'talk_idea'                     => ['required', 'string', 'max:500'],
            'talk_idea_outline'             => ['required', 'string', 'max:500'],
            'audience_takeaway_message'     => ['required', 'string', 'max:500'],
            'question1'                     => ['required', 'string', 'max:500'],
            'question2'                     => ['required', 'string', 'max:500'],
            'location'                      => ['required', 'string', 'max:500'],
            'question3'                     => ['required', 'string', 'max:500'],

            'event_id' => ['required', Rule::in($events)],
        ];
    }

    public function messages(): array
    {
        return [
            'question1.required' => 'you should answer all the questions',
            'question2.required' => 'you should answer all the questions',
            'question3.required' => 'you should answer all the questions',
            'event_id.required' => 'you should select event for the register'
        ];
    }
}
