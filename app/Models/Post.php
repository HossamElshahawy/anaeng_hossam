<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,  Likeable , SoftDeletes;
    use SoftDeletes;

    protected $fillable = [
        'body',
        'photo',
        'profile_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function comments()

    {

        return $this->hasMany(Comment::class)->whereNull('parent_id');

    }
}
