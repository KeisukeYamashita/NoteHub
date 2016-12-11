<?php

namespace App\Http\Controllers;
// require 'vendor/autoload.php';


use Illuminate\Http\Request;
use App\Classes;
use Carbon\Carbon;

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
      $nowtime = $dt->hour * 60 + $dt->minute;
      $period = 0;
      if (8 * 60 + 30 < $nowtime and $nowtime < 10 * 60 + 15) $period = 1;
      if (10 * 60 + 25 < $nowtime and $nowtime < 12 * 60 + 10) $period = 2;
      if (13 * 60 < $nowtime and $nowtime < 14 * 60 + 45) $period = 3;
      if (14 * 60 + 55 < $nowtime and $nowtime < 16 * 60 + 40) $period = 4;
      if (16 * 60 + 50 < $nowtime and $nowtime < 18 * 60 + 35) $period = 5;
      $classes = Classes::where('dayOfWeek', '=', $dt->dayOfWeek)->where('period', '=', $period)->get();
      return view('channel.channel')->with('classes', $classes);
    }

    public function classes($classid) {
      $class = Classes::findOrFail($classid);
      return view('classes.classes_test')->with('class', $class);
    }

}
