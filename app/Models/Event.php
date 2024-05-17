<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'location'];

    public function sponsers ()
    {
        return $this->belongsToMany(Sponser::class);
    }

    public function speakers ()
    {
        return $this->belongsToMany(Speaker::class);
    }

    public function volunteers ()
    {
        return $this->belongsToMany(Volunteer::class);
    }

    public function members ()
    {
        return $this->belongsToMany(Member::class);
    }

    public function registers ()
    {
        return $this->belongsToMany(Register::class);
    }


}
