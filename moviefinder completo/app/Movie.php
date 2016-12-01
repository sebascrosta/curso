<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function copyright()
    {
        return $this->hasOne(Copyright::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    protected $hidden = ['created_at',
                         'updated_at'];

    protected $visible = ['id', 'title', 'url', 'has_awards', 'release_date', 'genre'];

    protected $appends = ['url', 'has_awards'];

    public function getUrlAttribute(){
        return url ("/api/movies/" . $this->id);
    }

    public function getHasAwardsAttribute(){
        return $this->awards > 0;
    }

    protected $casts = [
        'rating' => 'float',
        'release_date' => 'timestamp',
        ];

}
