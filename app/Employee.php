<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "users";
    
    protected $fillable = [
        'username', 'gender', 'email', 'position', 'address', 'birth'
    ];

    public $timestamps = false;

}
