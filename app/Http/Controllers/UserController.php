<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

use DB;
use Hash;
use Redis;


class UserController extends Controller
{


   
     use HasRoles;
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = User::all();
        //dd(\Auth::User()->roles()->first());
        return view('user.index',compact('data'));
            //->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('sdadsad');
        $roles = Role::pluck('name','name')->all();
        return view('user.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //dd('dadsadad');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'roles'=>'required'
            
        ]);

       $input = $request->all();
       $input['password'] = Hash::make($input['password']);

       $user = User::create($input);
       $user->assignRole($request->input('roles'));

       return redirect('user')->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function edit($id)
    {
       //dd('ddadda');   
        $user = User::find($id);
        $roles = Role::all();

        $userRole = $user->roles->first();
        return view('user.edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

       
        $input = $request->all();
        //dd($input);
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        $user = User::find($id);
        //dd($user);
        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));


        return redirect('user')
                        ->with('success','User updated successfully');

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('user')->with('success','User deleted successfully');
    }


    /*public function showProfile($id){

        $user = Redis::get('user:profile:'.$id);

        return view('user.profile', ['user' => $user]);

    }*/


}
