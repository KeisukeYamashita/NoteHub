<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class NoteHubController extends Controller
{
    //
    public function index() {
      return view('index');
    }

    // public function login() {
    //   return view('login');
    // }

    public function login_2() {
      return view('auth.login_2');
    }

    public function channel() {
      $classes = Classes::all();
      return view('channel.channel')->with('classes', $classes);
    }

    public function classes($classid) {
      $class = Classes::findOrFail($classid);
      return view('classes.classes_test')->with('class', $class);
    }

}
