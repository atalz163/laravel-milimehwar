<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class TeamMembers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'biography',
        'active',
        'published_at',
        'user_id',
        'language_id',
        'item_id'
    ];
    public function language(){
        return $this->belongsTo(Language::class);
    }
    

    public function item():BelongsTo{
        return $this->belongsTo(Item::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shortBody()
    {
        return Str::words(strip_tags($this->body), 50);
    }
    public function getFormattedDate()
    {
        return $this->published_at->format('F jS Y');
    }


}
