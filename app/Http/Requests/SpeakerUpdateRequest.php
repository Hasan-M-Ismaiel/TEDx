<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SpeakerUpdateRequest extends FormRequest
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
            'talk_idea'     => ['required', 'string', 'max:500'],
            
            'facebook'      => ['max:500'],
            'linkedin'      => ['max:500'],
            'twitter'       => ['max:500'],
            'instagram'     => ['max:500'],
            'website'       => ['max:500'],

            'event_id' => ['required', Rule::in($events)],
        ];
    }
}
