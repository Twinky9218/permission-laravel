
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
              @can('role-create')
            <a class="btn btn-success" href="{{ url('roles/create') }}"> Create New Role</a>
           @endcan
       
            
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ url('roles/show',$role->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ url('roles/edit',$role->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ url('roles/delete',$role->id)}}">Delete</a>
         
             
       


        </td>
    </tr>
    @endforeach
</table>



<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection

