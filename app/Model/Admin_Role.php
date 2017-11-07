<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin_Role extends Model
{
	protected $table = 'admin_role';
	protected $fillable = ['admin_id', 'role_id'];
}
