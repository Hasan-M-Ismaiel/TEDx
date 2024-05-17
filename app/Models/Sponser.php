<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponser extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'about', 
        'phone_number', 
        'logo', 
        'facebook_account', 
        'twitter_account', 
        'instagram_account',
        'linkedin_account',
        'website',
    ];

    public function events ()
    {
        return $this->belongsToMany(Event::class);
    }
}
