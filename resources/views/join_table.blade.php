
@extends('layouts.app')


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <body>
        	<div class="container">
              <div class="table responsive">
              	<table class="table table-striped">
              		<thead>
              		 <tr>
              			<th>Empname</th>
              			<th>Mobileno</th>
              			<th>DeptName</th>
              		 </tr>
              		<tbody>
              			@foreach($data as $row)
              		 <tr>	
              			<th>{{ $row->empname }}</th>
              			<th>{{ $row->mobileno }}</th>
              			<th>{{ $row->deptname }}</th>
                        @endforeach
                     </tr>   
                 </tbody>       
                 </table>
             </div>
         </div>
     </body>
 </head>
 </html>


