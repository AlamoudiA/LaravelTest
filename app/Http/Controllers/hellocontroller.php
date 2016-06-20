<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class hellocontroller extends Controller
{
    public function index()
    {
      $name = "any name in there";
      return view("hello", compact("name"));
    }
}
