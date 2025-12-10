<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function roasters()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function staff()
    {
        return $this->hasOne(User::class, 'id', 'staff_id');
    }

    public function event_agenda()
    {
        return $this->belongsTo(EventAgenda::class, 'event_id');
    }
}
