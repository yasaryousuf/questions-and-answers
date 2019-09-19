<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content',
    ];

    public static function sanitizeHtml($html)
    {
        $dom = new \DomDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHtml($html);
        return utf8_decode($dom->saveHTML($dom));
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::createFromDate($value)->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
