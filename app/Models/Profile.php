<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    // use HasFactory;
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'user_id',
        'profile_image',
        'name',
        'about',
        'company',
        'job',
        'country',
        'address',
        'phone',
        'email',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
