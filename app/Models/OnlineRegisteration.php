<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineRegisteration extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'father_name',
        'grand_father_name',
        'gender',
        'marital_status',
        'blood_group',
        'friend_number',
        'mobile',
        'email',
        'province',
        'village',
        'district',
        'current_address',
        'current_job',
        'languages',
        'mother_tounge',
        'education_level',
        'talent',
        'approved'
    ];
}

