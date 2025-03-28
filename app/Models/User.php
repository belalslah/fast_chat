<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = "users";
    protected $guarded = ['id'];


    protected $hidden = [
        'password',
    ];

    public function chats(): HasMany{
        return $this->hasMany(Chat::class,'created_by');
    }
}
