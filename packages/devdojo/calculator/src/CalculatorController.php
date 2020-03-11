<?php

namespace Devdojo\Calculator;

use Illuminate\Http\Request;
use Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //

   // dd('12212122');



    public function add($a ,$b){

     //dd('dadadad');	
      $result = $a + $b;
      //echo $result;
      //dd($result);
      return view('calculator::add' ,compact('result'));   
 
    }

    public function subtract($a, $b){
     $result = $a - $b;
     //echo $result;
     //dd($result);
     return view('calculator::subtract' ,compact('result')); 
     
    }
}
