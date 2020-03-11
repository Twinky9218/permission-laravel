@extends('layouts.app')

@section('content')

<div class="container">

 @if  ($errors->any())
  <div class="alert alert-danger">
    <ul>
    	@foreach($errors->all() as $error)
    	  <li>{{  $error }}</li>
    	@endforeach
    </ul>

   </div>
</br>
 
 @endif
   

 <div class="row">
  <form method="post" action="{{url('/create/ticket')}}">  	  
   <div class="form-group">
   	 <input type="hidden"  value="{{csrf_token()}}" name="_token">
   	 <label for="title">Ticket Title:</label>
   	 <input type="text" class="form-control" name="title">
   </div>
   
   <div class="form-group">
    <label for="description">Description:</label>
    <textarea rows="5" cols="10" class="form-control" name="description">
     </textarea>	
   </div> 	 

   <button type="submit" class="btn btn-primary" name="create">Save</button>
   <a href="{{url('/tickets')}}">Back</a>
</form>
</div>
</div>

@endsection

