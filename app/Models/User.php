<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
    * The attributes that are mass assignable.
    *
    *@var array
    */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    /**
    * The attributes that are mass assignable.
    *
    *@var array
    */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
    * The attributes that are mass assignable.
    *
    *@var array
    */
    protected $casts =[
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function posts()
{
    return $this->hasMany(Post::class);
}

}
