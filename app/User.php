<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use  Notifiable,HasRoles;
    //use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function roles(){
    return $this->belongsToMany('App\Role','model_has_roles','model_id','role_id');
    }*/
    //protected $guard_name = 'web';

    /*public function updateUser($data)
{
    //dd('dssffafafaf');
    $user= $this->find($data['id']);
    //dd($user);
    $user->id = auth()->user()->id;
    $user=$data['name'];
    //dd($user);
    $user=$data['email'];
    //dd($data);

    return 1;

}*/
}
