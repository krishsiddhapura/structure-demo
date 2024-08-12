<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $table = 'admins';
    protected $fillable = [
        'id',
        'email',
        'password',
        'name',
        'image',
        'role',
        'status',
        'timezone',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    function getImage()
    {
        return asset('uploads/admin/profile/'.$this->image);
    }

    function getRole()
    {
        return ucfirst(str_replace('-',' ',$this->role));
    }
}
