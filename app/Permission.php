<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;


class Permission extends Model
{
	use HasPermissions;
}
