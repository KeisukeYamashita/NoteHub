@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<head>
  <link href="/css/channel.css" rel="stylesheet">
  <title>チャンネル</title>
</head>

<body>
  <div class="table-responsive">
    <table class="table  table-hover">
      <thead>
        <tr>
          <th class="col-md-1">授業コード</th>
          <th class="col-md-4">講義名</th>
          <th class="col-md-2">担当教員</th>
          <th class="col-md-2">教室</th>
          <!-- <th class="col-md-1">入退室</th> -->
        </tr>
      </thead>
      <tbody>
        @forelse ($classes as $class)
        <tr>
          <td><a class="link" href="/{{$class->classUrl}}">{{ $class->classid }}</a></td>
          <td><a class="link" href="/{{$class->classUrl}}">{{ $class->className }}</a></td>
          <td><a class="link" href="/{{$class->classUrl}}">{{ $class->teacherName }}</a></td>
          <td><a class="link" href="/{{$class->classUrl}}">{{ $class->roomNumber }}教室</a></td>
          <!-- <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td> -->
        </tr>
        @empty
        <tr>
          <td>現在開講されている授業はありません。</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  @endsection
</body>
</html>
