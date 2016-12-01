<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function copyright(){
        return $this->hasOne(Copyright::class);
}
}
