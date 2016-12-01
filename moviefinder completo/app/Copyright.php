<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
