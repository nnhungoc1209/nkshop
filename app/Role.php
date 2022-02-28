<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";
    protected $primaryKey = "id_role";

    public function Admin(){
        return $this->hasMany(Admin::class, 'id_role', 'id_role');
    }

    public function Member(){
        return $this->hasMany(Member::class, 'id_role', 'id_role');
    }
}

