@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
 <!-- <a href="{{url('/tickets')}}">   
   
    <div class="row">
       
       <a href="{{url('/tickets')}}" class="btn btn-default">All Tickets</a>
    </div> -->
</div>
@endsection