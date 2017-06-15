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
  <a href="/#note-service"><h1 class="service_text">
    洗練された3つのサービス
  </h1></a>
  <div class="boxContainer">
    <a href="#note-service"><h1 class="box1 box">ノート共同作製</h1></a>
    <a href="#chat-service"><h1 class="box2 box">チャット</h1></a>
    <a href="#live-service"><h1 class="box3 box">ライブ配信</h1></a>
  </div>


</div>

    <div id="note-service" class="detail_service">
      <h1 class="detail_service_text">
        ノート共同作製
      </h1>
      <h2 class="detail_service_box">受講者みんなでノートの共同作製が可能になり、みんなとノートを共有することで理解の手助けとなる</h2>
        <a class="next" href="/#chat-service">次へ<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
    </a>
    </div>

    <div id="chat-service" class="detail_service">
      <h1 class="detail_service_text">
        チャット
      </h1>
      <h2 class="detail_service_box">受講者同士の質疑応答やコミュニケーションが可能になり、能動的で活発な講義の手助けとなる</h2>
      <a class="next" href="/#live-service">次へ<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
    </div>

    <div id="live-service" class="detail_service">
      <h1 class="detail_service_text">
        ライブ配信
      </h1>
      <h2 class="detail_service_box">どこからでも講義の聴講が可能になり、大学へ足を運べない場合でも自身のデバイスから受講ができる</h2>
      <a class="next" href="/#three-service">次へ<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
    </div>

    <div id="three-service" class="detail_service">
      <h1 class="detail_service_box" style="font-size:3em">この3つのサービスが一画面に。</h1>
      <a class="next-login" href="/login">さっそく使ってみよう<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>


    @endsection
