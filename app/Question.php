<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::createFromDate($value)->diffForHumans();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
