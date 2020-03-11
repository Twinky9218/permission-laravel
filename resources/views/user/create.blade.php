@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
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


<form method="post" action="/user/store">
@csrf


  <div class="row">
 <div class="form-group">
  <label>Name:</label>
  <td width="10" height="10"><input type="text" class="" name="name" placeholder="Enter Name" id="name" size="20" ></td>
  </div>
</div>


  <div class="row">
  <div class="form-group">
    <label>Email:</label>  
    <td><input type="text" class=" " name="email" placeholder="Enter Email" 
    id="email" ></td>
  </div>
 </div> 
 
    
  <div class="row">  
  <div class="form-group">
    <label>Password:</label>  
      <input type="password" class=" " name="password" placeholder="Enter Password" id="password" >
    </div>
   </div> 

<div class="row"> 
  <div class="form-group">
    <label>Confirm Password:</label>  
    <input type="password" class=" " name="confirm_password" placeholder="Enter Password" id="confirm_password" >
     
    </div>
  </div>      


   <div class="row">
    <div class="form-group">
      <label>Role:</label>
      <!-- <input type="dropdown" name="roles" class="form-control" multiple> --> 
            <select id="role" name="roles"> 
            <option value="Writer">Writer</option>
            <option value="Editor">Editor</option>
            <option value="Publisher">Publisher</option>
            <option value="Admin">Admin</option>
            </select>
        </div>
    </div>
   
      <button type="submit " name="my Submit" class="btn btn-primary">Submit</button>
         <a class="btn btn-primary" href="{{ url('user') }}"> Back</a>
    </div>
</div>

</form>




@endsection
