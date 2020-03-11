<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
   public function index()
   {
     
     $tickets=Ticket::where('user_id',auth()->user()->id)->get();
     //dd($tickets);
     return view('user.index',compact('tickets')); 

   }

   public function create()
   {
   	 return view('user.create');
   }

   public function store(Request $request)
   {
   	
   	$ticket= new Ticket();
   	$data=$this->validate($request,[
   		  'description'=>'required', 
          'title'=>'required' 
      ]);

   	$ticket->saveTicket($data);
   	return redirect('/tickets')->with('success','New Record Inserted Successfully ! wait something went wrong');
   }

   public function edit($id)
   {
     
      $ticket=Ticket::where('user_id',auth()->user()->id)	 
                    ->where('id',$id)
                    ->first();


      return view('user.edit',compact('ticket','id'));              
   }

   public function update(Request $request ,$id)
   {
   	 $ticket =new Ticket();
   	 $data = $this->validate($request,[
             'description'=>'required',
             'title'=>'required'
   	 ]);
     
     $data['id']= $id; 
   	 $ticket->updateTicket($data);
   	 //dd($data);
   	 
   	 return redirect('/tickets')->with('success','New Record Update Successfully');

   }

    public function destroy($id)
    {
  
     $ticket=Ticket::find($id);
     $ticket->delete();

     return redirect('/tickets')->with('success','Account has been deleted');
    }

}
