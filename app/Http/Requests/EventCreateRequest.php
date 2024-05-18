<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCreateRequest extends FormRequest
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
            'title'       => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:500'],
            'date'        => 'required|date|after:now',   
            'location'    => ['required', 'string', 'max:500'],
            
            'facebook_account'      => ['required', 'string', 'max:500'],
            'linkedin_account'      => ['required', 'string', 'max:500'],
            'twitter_account'       => ['required', 'string', 'max:500'],
            'instagram_account'     => ['required', 'string', 'max:500'],
            'website'               => ['required', 'string', 'max:500'],
            
            //speaker
            // "first_names_speaker"    => "array",
            // "first_names_speaker.*"  => "required|string|min:2", 

            // "last_names_speaker"    => "array",
            // "last_names_speaker.*"  => "required|string|min:2", 

            // "emails_speaker"    => "array",
            // "emails_speaker.*"  => "required|string|min:2", 

            // "phones_speaker"    => "array",
            // "phones_speaker.*"  => "required|string|min:2", 

            // "abouts_speaker"    => "array",
            // "abouts_speaker.*"  => "required|string|min:2", 

            // "facebook_accounts_speaker"    => "array",
            // "facebook_accounts_speaker.*"  => "required|string|min:2", 

            // "linkedin_accounts_speaker"    => "array",
            // "linkedin_accounts_speaker.*"  => "required|string|min:2", 

            // "twitter_accounts_speaker"    => "array",
            // "twitter_accounts_speaker.*"  => "required|string|min:2", 

            // "instagram_accounts_speaker"    => "array",
            // "instagram_accounts_speaker.*"  => "required|string|min:2", 

            // "websites_speaker"    => "array",
            // "websites_speaker.*"  => "required|string|min:2", 
            

            // //sponsers
            // "first_names_sponser"    => "array",
            // "first_names_sponser.*"  => "required|string|min:2", 

            // "last_names_sponser"    => "array",
            // "last_names_sponser.*"  => "required|string|min:2", 

            // "emails_sponser"    => "array",
            // "emails_sponser.*"  => "required|string|min:2", 

            // "phones_sponser"    => "array",
            // "phones_sponser.*"  => "required|string|min:2", 

            // "abouts_sponser"    => "array",
            // "abouts_sponser.*"  => "required|string|min:2", 

            // "facebook_accounts_sponser"    => "array",
            // "facebook_accounts_sponser.*"  => "required|string|min:2", 

            // "linkedin_accounts_sponser"    => "array",
            // "linkedin_accounts_sponser.*"  => "required|string|min:2", 

            // "twitter_accounts_sponser"    => "array",
            // "twitter_accounts_sponser.*"  => "required|string|min:2", 

            // "instagram_accounts_sponser"    => "array",
            // "instagram_accounts_sponser.*"  => "required|string|min:2", 

            // "websites_sponser"    => "array",
            // "websites_sponser.*"  => "required|string|min:2", 

            // //member
            // "first_names_member"    => "array",
            // "first_names_member.*"  => "required|string|min:2", 

            // "last_names_member"    => "array",
            // "last_names_member.*"  => "required|string|min:2", 

            // "emails_member"    => "array",
            // "emails_member.*"  => "required|string|min:2", 

            // "phones_member"    => "array",
            // "phones_member.*"  => "required|string|min:2", 

            // "abouts_member"    => "array",
            // "abouts_member.*"  => "required|string|min:2", 

            // "facebook_accounts_member"    => "array",
            // "facebook_accounts_member.*"  => "required|string|min:2", 

            // "linkedin_accounts_member"    => "array",
            // "linkedin_accounts_member.*"  => "required|string|min:2", 

            // "twitter_accounts_member"    => "array",
            // "twitter_accounts_member.*"  => "required|string|min:2", 

            // "instagram_accounts_member"    => "array",
            // "instagram_accounts_member.*"  => "required|string|min:2", 

            // "websites_member"    => "array",
            // "websites_member.*"  => "required|string|min:2",
            
            
            // //volunteer
            // "first_names_volunteer"    => "array",
            // "first_names_volunteer.*"  => "required|string|min:2", 

            // "last_names_volunteer"    => "array",
            // "last_names_volunteer.*"  => "required|string|min:2", 

            // "emails_volunteer"    => "array",
            // "emails_volunteer.*"  => "required|string|min:2", 

            // "phones_volunteer"    => "array",
            // "phones_volunteer.*"  => "required|string|min:2", 

            // "abouts_volunteer"    => "array",
            // "abouts_volunteer.*"  => "required|string|min:2", 

            // "facebook_accounts_volunteer"    => "array",
            // "facebook_accounts_volunteer.*"  => "required|string|min:2", 

            // "linkedin_accounts_volunteer"    => "array",
            // "linkedin_accounts_volunteer.*"  => "required|string|min:2", 

            // "twitter_accounts_volunteer"    => "array",
            // "twitter_accounts_volunteer.*"  => "required|string|min:2", 

            // "instagram_accounts_volunteer"    => "array",
            // "instagram_accounts_volunteer.*"  => "required|string|min:2", 

            // "websites_volunteer"    => "array",
            // "websites_volunteer.*"  => "required|string|min:2", 

            // //register
            // "first_names_register"    => "array",
            // "first_names_register.*"  => "required|string|min:2", 

            // "last_names_register"    => "array",
            // "last_names_register.*"  => "required|string|min:2", 

            // "emails_register"    => "array",
            // "emails_register.*"  => "required|string|min:2", 

            // "phones_register"    => "array",
            // "phones_register.*"  => "required|string|min:2", 

            // "abouts_register"    => "array",
            // "abouts_register.*"  => "required|string|min:2", 

            // "facebook_accounts_register"    => "array",
            // "facebook_accounts_register.*"  => "required|string|min:2", 

            // "linkedin_accounts_register"    => "array",
            // "linkedin_accounts_register.*"  => "required|string|min:2", 

            // "twitter_accounts_register"    => "array",
            // "twitter_accounts_register.*"  => "required|string|min:2", 

            // "instagram_accounts_register"    => "array",
            // "instagram_accounts_register.*"  => "required|string|min:2", 

            // "websites_register"    => "array",
            // "websites_register.*"  => "required|string|min:2", 
        ];
    }
}
