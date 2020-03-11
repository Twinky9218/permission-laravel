@extends('layouts.app')

@section('content')

<div class="container">
	 @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif

 <table class="table table-striped">
   <thead>
   	
   	  <td><a href="{{url('/create/ticket')}}" class="btn btn-success">Create Ticket</a></td>
	
	 <tr>
      <td>Id</td>
      <td>Title</td>
      <td>Description</td>
      <td colspan="2">Actions</td>
   </tr>
  </thead>

    <tbody>
       @foreach($tickets as $ticket)
       <tr>
        <td>{{$ticket->id}}</td>
        <td>{{$ticket->title}}</td>
        <td>{{$ticket->description}}</td>
        <td><a href="{{action('TicketController@edit',$ticket->id)}}" class="btn btn-primary">Edit</a></td>
        <td><form action="{{action('TicketController@destroy',$ticket->id)}}" method="post"> {{csrf_field()}}
        <input type="hidden" name="method" value="DELETE">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        </td>	
       </tr>
       @endforeach
       </tbody>  
 </table>

 @endsection

        