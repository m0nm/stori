<?php

namespace App\Models;

use Overtrue\LaravelLike\Traits\Liker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;


class User extends Authenticatable implements CanResetPassword
{
    use HasFactory, Liker, Notifiable;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'oauth_id',
        'oauth_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relationship to post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // relationship to comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // relation to profile
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }
}