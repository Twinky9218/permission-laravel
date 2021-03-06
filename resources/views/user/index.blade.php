@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>User Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('user/create') }}"> Create New User</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

  <table class="table table-bordered">
 <tr>
   
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
       @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ url('user/show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ url('user/edit',$user->id) }}">Edit</a>
     <a class="btn btn-primary" href="{{url('user/delete' ,$user->id) }}">Delete</a>
       


     
    </td>
  </tr>
 @endforeach
</table>




<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection