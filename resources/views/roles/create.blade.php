@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
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


<form method="post" action="/roles/store">
@csrf    

       <div class="row">
            <div class="form-group">
            <label>Name:</</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
       </div>
       <div class="row">
        <div class="form-group">
            <label>Permission:</label>
            <br/> 
        @foreach($permission as $value)
        <input type="checkbox" name="permission" class="name">{{$value->name}}
            <br/>
           @endforeach
       </div>
      </div>
    
        <div class="row">
          <div class="form-group">  
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ url('roles') }}"> Back</a>
    </div>
</div>



@endsection