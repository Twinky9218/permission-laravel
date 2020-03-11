<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;

class Role extends Model
{
	use HasPermissions;

    // protected $table = 'roles';

	 //protected $guard_name = 'web';
	 protected $fillable= ['name'];
	 
   
    
}
