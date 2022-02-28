<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table = "member";
    protected $primaryKey = "username";
    public $incrementing = false;

    public function Role(){
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
