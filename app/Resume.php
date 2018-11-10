<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Resume
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Resume extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
