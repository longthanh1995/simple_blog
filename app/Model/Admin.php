<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['name', 'email', 'password', 'phone'];
    public function roles()
	{
		return $this->belongsToMany(Role::class, 'admin_role', 'admin_id', 'role_id');
	}
	
}
