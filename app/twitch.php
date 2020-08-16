<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class twitch extends Model
{
    public function user()
    {
        return $this-belongsTo(User::class);
    }
}
