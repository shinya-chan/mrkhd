<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Service
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Service extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
