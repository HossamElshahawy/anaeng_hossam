<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'image',
        'profile_cover',
        'facebook',
        'twitter',
        'linkedin',
        'phone',
        'city',
        'job',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }




}
