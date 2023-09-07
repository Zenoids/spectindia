<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function state()
    {
        return $this->belongsTo(State::class, 'state');
    }

    public function parliament_seat()
    {
        return $this->belongsTo(Seat::class, 'parliament_seat');
    }

    public function assembly_constituency()
    {
        return $this->belongsTo(Constituency::class, 'assembly_constituency');
    }
    
}
