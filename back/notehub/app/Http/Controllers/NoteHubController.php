<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      return view('channel.channel');
    }

    public function yuukikagaku() {
      return view('classes.classes_test');
    }
}
