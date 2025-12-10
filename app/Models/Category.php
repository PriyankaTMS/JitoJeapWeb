<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function powerteam()
    // {
    //     return $this->belongsTo(PowerTeam::class);
    // }
    public function powerteam()
    {
        return $this->hasOne(PowerTeam::class, 'id', 'pt_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
