<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'u_id';
    public $timestamps = false;
    protected $fillable = ['u_name','u_email','u_pwd','u_time'];
}
