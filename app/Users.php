<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Users extends Model
{
	use Notifiable;
	use HasRoles;
   
    protected $fillable= ['id','name','password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

public function saveUsers($data)
{
	//$this->id = auth()->user()->id;
	$this->name = $data['name'];
	$this->password = $data['password'];
	$this->email= $data['email'];
	$this->save();
	return 1;
}

public function updateUsers($data)
{
	$users= $this->find($data['id']);
	$users->id = auth()->user()->id;
	$users->name=$data['name'];
	$users->role=$data['role'];
	$users->save();
	return 1;

}

}

