<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;

class TestingController extends Controller
{

 public function index()
 {

   event (  new UserCreated('Your Account has been created'));
 }

}
