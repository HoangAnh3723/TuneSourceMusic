<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function index()
   {
      $title = '';

      $musics = DB::select('SELECT * FROM musics');

      return view('user', compact('title', 'musics'));
   }
}
