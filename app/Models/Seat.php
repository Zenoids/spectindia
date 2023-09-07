<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
      
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function constituencies()
    {
        return $this->hasMany(Constituency::class);
    }
}
