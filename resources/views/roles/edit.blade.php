@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
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


<form method="post" action="/roles/update/{{ $role->id }}">
@csrf    
     <div class="row">
      <div class="form-group">
        <strong>Name:</strong>
         <input type="text" name="name" class="form-control" placeholder="Name" value="{{$role->name}}">
        </div>
      

      
    </div>
        
        <!-- <div class="row"> 
        <div class="form-group">
            <strong>Permission:</strong>
          </br>
            @foreach($permissions as $permission)
            <input type="checkbox" name="permissions" class="" value="$permission->id">{{$permission->name}} </br>
            @endforeach
           
                  
            <br/>
            
        </div>
      </div> -->

  
        <div class="row"> 
          <div class="form-group">
            <strong>Permission:</strong>   
            </br> 
          
          <div class="panel-body">
          
        @foreach($permissions as $permission)
        <div class="col-sm-3">
          <label class="checkbox-inline "for="perm[{{ $permission->id }}]">
            <input id="perm[{{ $permission->id }}]" name="perm[{{ $permission->id }}]" type="checkbox" value="{{ $permission->id }}"
            @if($role->permissions->contains($permission->id)) checked=checked @endif>
            {{ $permission->name }}
        </label>
    </div>

@endforeach


  

   

    <div class="row">
    <div class="form-group"> 
        <button type="submit" class="btn btn-primary">Submit</button>
         <a class="btn btn-primary" href="{{ url('roles') }}"> Back</a>
    </div>
</form>


@endsection