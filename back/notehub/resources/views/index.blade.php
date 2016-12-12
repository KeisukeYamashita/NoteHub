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
    <div class="jumbotron">
      <h1 class="jumbotron_text1">NoteHubとは</h1>
      <h2 class="jumbotron_text2">どこにいても講義に参加でき<br>みんなでノートを作り上げる<br>ソーシャルクラスネットワーク</h2>
    	<p><a class="btn btn-primary btn-lg " href="#service" role="button">もっと詳しく</a></p>
    </div>


<!--
    <div id="service2">
      <blockquote>人は一人では何も成し遂げられない<br>by John Donne
      </blockquote>
      <h1 class="service_text2">
        NoteHubはその場にいなくても、みんなと講義を受け<br>みんなで1つのノートを作るシステム
      </h1>
    </div>
-->
    <div id="service">
      <h1 class="service_text">
        洗練された3つのサービス
      </h1>
      <div class="boxContainer">
	<a href="#"><h1 class="box1 box">ノート共同作製</h1></a>
	<a href="#"><h1 class="box2 box">チャット</h1></a>
	<a href="#"><h1 class="box3 box">ライブ配信</h1></a>
</div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>


    @endsection
