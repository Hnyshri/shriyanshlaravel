<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'dob', 'gender', 'email', 'mobileNumber', 'address', 'city', 'pinCode', 'cityState', 'fileName', 'password',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'users_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'users_id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
}
