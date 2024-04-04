<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];


    public function newsTranslations()
    {
        return $this->hasMany(NewsTranslation::class);
    }

    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }

    public function teamMembers()
    {
        return $this->hasMany(TeamMembers::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    // public function bookclubs()
    // {
    //     return $this->hasMany(BookClubs::class);
    // }
}
