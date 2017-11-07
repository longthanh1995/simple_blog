<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';
	protected $fillable = ['name', 'description'];
	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
	}
	public function admins()
	{
		return $this->belongsToMany(Admin::class, 'admin_role', 'role_id', 'admin_id');
	}
}
