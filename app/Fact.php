<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Fact
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Fact extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
