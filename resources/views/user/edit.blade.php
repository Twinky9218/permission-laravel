@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>
       
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


<form method="post" action="/user/update/{{ $user->id }}">
@csrf
 
 <div class="row">
     <div class="form-group">
      <label>Name:<input type="text" class="form-control " name="name" placeholder="Enter Name" id="name" required=" " value="{{ $user->name }}"></label>
     </div>
  </div>   
    
  <div class="row">
     <div class="form-group">
      <label>Email:<input type="text" class="form-control" name="email" placeholder="Enter Email" id="email" required=" " value="{{ $user->email }}"></label>
        </div>
    </div>


  <div class="row">
    <div class="form-group">
      <label>Role:</label>
        <select name="roles" class="form-control">
        @foreach($roles as $role)
          @if($userRole->name == $role->name)
           <option value="{{$role->name}}" selected>{{ $role->name }}</option>
            @else
            <option value="{{$role->name}}">{{ $role->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
  </div>
     
     <div class="row">
      <td><button type="submit" class="btn btn-primary">Submit</button></td>
      <td><a class="btn btn-primary" href="{{ url('user') }}"> Back</a></td>
        </div>
       </div> 

   
</div>


@endsection