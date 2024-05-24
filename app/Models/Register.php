<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone_number', 
        
        'profession',

        'bio', 
        'talk_idea', 
        'talk_idea_outline', 
        'audience_takeaway_message', 
        'location', 
        'question1', 
        'question2', 
        'question3', 
    ];

    public function events ()
    {
        return $this->belongsToMany(Event::class);
    }

    public function checkifAssignedToEvent(Event $event)
    {
        $numeberOfAssignedEvents = $this->events()
                    ->where('events.id', $event->id)
                    ->count();
        return $numeberOfAssignedEvents > 0 ? true : false; 
    }
}
