<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Skill
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Skill extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
