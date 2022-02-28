<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "Admin";
    protected $primaryKey = "username";
    public $incrementing = false;

    public function role(){
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}

