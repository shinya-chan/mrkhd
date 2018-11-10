<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Client
 *
 * @mixin \Eloquent
 */
class Client extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
