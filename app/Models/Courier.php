<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Courier extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'motor_type', 'phone_number', 'email', 'plate_number', 'password'
    ];

    protected $hidden = [
        'password',
    ];
}
