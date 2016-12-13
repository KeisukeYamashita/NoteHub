<!-- @extends('layouts.app') -->

<!-- @section('content') -->
<!DOCTYPE html>
<head>
  <title>チャンネル</title>
</head>
<body>
  <div class="table-responsive">
    <table class="table  table-hover">
      <thead>
        <tr>
          <th class="col-md-1">部屋名</th>
          <!-- <th class="col-md-1">入退室</th> -->
        </tr>
      </thead>
      <tbody>
        @forelse ($rooms as $room)
        <tr>
          <td><a href="{{ url($room->url) }}">{{ $room->className }}</a></td>
          <!-- <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td> -->
        </tr>
        @empty
        <tr>
          <td>現在部屋はありません。</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- @endsection -->
</body>
</html>
