<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task22 extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email', 'name', 'role', 'avatar', 'phone', 'address', 'password', 'created_at', 'updated_at'
    ];
}
