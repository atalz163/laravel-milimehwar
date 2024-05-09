<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;


    protected $fillable = ['title','description','image_path','user_id'];   

    protected $casts = [
        'image_path' => 'array'
    
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
