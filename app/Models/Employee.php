<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'role',
        'phone',
        'dob',
    ];    
}
