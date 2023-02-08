<?php

namespace App\Models;

use App\Models\Gender;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'accounts';

    protected $primaryKey = 'account_id';
    protected $fillable = [
        'account_id',
        'role_id',
        'gender_id',
        'first_name',
        'last_name',
        'display_picture_link',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Role() {
        return $this->belongsTo(Role::class,'role_id');
    }
    public function Gender(){
        return $this->belongsTo(Gender::class,'gender_id');

    }
}
