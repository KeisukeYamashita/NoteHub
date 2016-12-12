<?php

namespace App\Http\Controllers;
// require 'vendor/autoload.php';


use Illuminate\Http\Request;
use App\Classes;
use Carbon\Carbon;
use App\Rooms;

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
      $dt = Carbon::now();
      $tz = 'Asia/Tokyo';
      $period = 0;
      if ($dt->between(Carbon::createFromTime(8,30,0,$tz), Carbon::createFromTime(10,15,0,$tz))) $period = 1;
      if ($dt->between(Carbon::createFromTime(10,25,0,$tz), Carbon::createFromTime(12,10,0,$tz))) $period = 2;
      if ($dt->between(Carbon::createFromTime(13,0,0,$tz), Carbon::createFromTime(14,45,0,$tz))) $period = 3;
      if ($dt->between(Carbon::createFromTime(14,55,0,$tz), Carbon::createFromTime(16,40,0,$tz))) $period = 4;
      if ($dt->between(Carbon::createFromTime(16,50,0,$tz), Carbon::createFromTime(18,35,0,$tz))) $period = 5;
      $period = 3;
      $classes = Classes::where('dayOfWeek', '=', $dt->dayOfWeek)->where('period', '=', $period)->get();
      return view('channel.channel')->with('classes', $classes);
    }

    public function classes($classid) {
      $class = Classes::findOrFail($classid);
      return view('classes.classes_test')->with('class', $class);
    }

    // public function rooms() {
    //   $rooms = Rooms::all();
    //   return view('rooms')->with('rooms', $rooms);
    // }
    //
    // public function addRoom(Request $request) {
    //   $room = new Rooms();
    //   $room->className = $request->className;
    //   $room->url = $request->url;
    //   $room->save();
    //   return redirect($request->url);
    // }

}
