<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomChapterLeader extends Model
{
    use HasFactory;
    public function chapter()
    {
        return $this->hasOne(Chapter::class, 'id', 'chap_id');
    }
}
