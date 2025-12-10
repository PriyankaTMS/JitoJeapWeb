<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function powerteam()
    {
        return $this->hasOne(PowerTeam::class, 'id', 'pt_id');
    }

    public function categories()
    {
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }
    public function chapters()
    {
        return $this->hasOne(Chapter::class, 'id', 'cap_id');
    }
    public function event()
    {
        return $this->hasMany(EventAgenda::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function membership()
    {
        // return $this->belongsTo(Membership::class, "mem_id");
        return $this->hasOne(Membership::class, 'id', 'mem_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
        // return $this->hasOne(Designation::class, 'id', 'designation_id ');
    }
}
