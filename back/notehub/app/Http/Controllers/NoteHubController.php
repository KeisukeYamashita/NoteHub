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
      // 現在時刻を取得して、その時刻が何限かを判断、曜日ごとに抽出する。
      // echo $dt . "\n";
      // echo $dt->dayOfWeek . "\n";
      $classes = Classes::where('dayOfWeek', '=', $dt->dayOfWeek)->get();
      return view('channel.channel')->with('classes', $classes);
    }

    public function classes($classid) {
      $class = Classes::findOrFail($classid);
      return view('classes.classes_test')->with('class', $class);
    }

}
