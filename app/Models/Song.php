<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
