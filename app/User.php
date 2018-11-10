<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

//use App\Service;

/**
 * App\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fact[] $facts
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Resume[] $resomes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Service[] $services
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Skill[] $skills
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'job',
        'instagram',
        'telegram',
        'github',
        'twitter',
        'custom_link',
        'custom_link_address',
        'about'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function facts()
    {
        return $this->hasMany(Fact::class);
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function works(){
        return $this->hasMany(Work::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function messaegs()
    {
        return $this->hasMany(Message::class);
    }
}
