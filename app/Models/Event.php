<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'description', 'date', 'location', 'facebook', 'linkedin', 'twitter', 'linedin', 'instagram', 'website', 'phone'];

    public function sponsers()
    {
        return $this->belongsToMany(Sponser::class);
    }

    public function speakers()
    {
        return $this->belongsToMany(Speaker::class);
    }

    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function registers()
    {
        return $this->belongsToMany(Register::class);
    }

    public function remainingTime()
    {

        $date_now_ = date('Y-m-d h:i:s a', time());;

        $date_now = new DateTime($date_now_);
        $date_event_created = new DateTime($this->created_at);
        $date_for_event = new DateTime($this->date);


        $from_now_to_occure = $date_for_event->diff($date_now);
        $from_created_to_occure = $date_event_created->diff($date_for_event);

        $passedDayes = $from_created_to_occure->d - $from_now_to_occure->d;
        return ($passedDayes*100)/$from_created_to_occure->d;

    }

    public function remaining_time()
    {
        $date_now_ = date('Y-m-d h:i:s a', time());;

        $date_now = new DateTime($date_now_);
        $date_for_event = new DateTime($this->date);
        $from_now_to_occure = $date_for_event->diff($date_now);

        return $from_now_to_occure->d;
    }
}
