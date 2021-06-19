<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['author', 'title', 'description', 'thumbnail', 'file'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
