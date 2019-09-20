<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content', 'slug'
    ];
    
   public function getRouteKeyName()
   {
      return 'slug';
   }

    public static function sanitizeHtml($html)
    {
        $dom = new \DomDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHtml($html);
        return utf8_decode($dom->saveHTML($dom));
    }

    public static function randomToken()
    {
        return bin2hex(random_bytes(4));
    }

    public static function slug($slug) 
    {
        $slug = Str::slug($slug, '-') . '-' . static::randomToken();
        $original = $slug;
        $count = 2;
        if (static::whereSlug($slug)->exists()) {
            static::slug("{$original}-" . static::randomToken());
        }
        return $slug;
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
