@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>NoteHub</title>

  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/index.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header"> -->
        <!-- <img class="team-logo" src="/0fromtokyo.png"> -->
        <!-- <button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbarEexample8">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img class="notehub-logo" src="notehub.png">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarEexample8">
        <ul class="nav navbar-nav">
          <li class="navbar-button"><a class="home" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> ホーム</a></li>
          <li class="navbar-button"><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> サービス</a></li>
          <li ><a class="navbar-login" href="/login" style="color:#ffffff"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> ログイン</a></li>
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}">ログインする</a></li> -->
                  <!-- <li><a href="{{ url('/register') }}">利用登録する</a></li> -->
              <!-- @else
                  <li class="dropdown">
                      <a href="{{ url('/logout')  }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                          ログアウト
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ url('/logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>
          </ul>

        </div>
      </div>
    </nav> -->

    <div class="jumbotron">
      <h1>Note Hub</h1>
    	<!-- <p><img class="room-img" src="classroom.png"></p> -->
      <p class="jumbotron_text">どこにいても講義に参加でき<br>みんなでノートを作り上げる<br>ソーシャルクラスネットワーク</p>
    	<p><a class="btn btn-primary btn-lg " href="#" role="button">もっと詳しく</a></p>
    </div>

    <div class="main">

    <!-- <div class="notehub"> -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>


    @endsection
