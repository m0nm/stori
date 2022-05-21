<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'avatar', 'job', 'location', 'bio', 'birthday', 'user_id', 'email', 'birthday_visible', 'email_visible'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}