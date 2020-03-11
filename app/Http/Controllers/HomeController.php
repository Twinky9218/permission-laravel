<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name'=>'writer']);
         //Permission::create(['name'=>'write post']);

       //dd('dadad');
        $role = Role::find(1);
        //dd($role);
        $permission = Permission::find(1);
        //dd($permission);
  //dd($permission->name);
// \DB::enableQueryLog(); 
      $ff = $role->givePermissionTo($permission);
      dd($ff);

      // echo "<pre>";
      // print_r(
   // \DB::getQueryLog()
// );
      //die();
       //dd($ff);
       //dd($role);
       //$permission->assignRole($role->name);//dd(1);

             //return auth()->user()->getAllPermissions();

        return view('user');
    }
}
