<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function categories()
    // {
    //     return $this->hasMany(Category::class);
    // }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function chapter()
    {
        return $this->hasMany(Chapter::class);
    }
}
