@extends('layouts.app')

@section('content')

<div class="table-responsive" style="background-color:#ffffff;">
  <table class="table  table-hover">
    <thead>
      <tr>
      <th class="col-md-1">授業コード</th>
      <th class="col-md-4">講義名</th>
      <th class="col-md-2">担当教員</th>
      <th class="col-md-2">教室</th>
      <th class="col-md-1">入退室</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>41024</td>
        <td>有機合成化学</td>
        <td>近藤検事</td>
        <td>1108教室</td>
        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
    </tr>
    <tr>
        <td>41111</td>
        <td>社会国際論</td>
        <td>氷川学</td>
        <td>154教室</td>
        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
    </tr>
    <tr>
        <td>31124</td>
        <td>植物物理学（文科生）</td>
        <td>三宅忍</td>
        <td>511教室</td>
        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
    </tr>
    <tr>
        <td>41024</td>
        <td>有機合成化学</td>
        <td>近藤検事</td>
        <td>1108教室</td>
        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
    </tr>
    <tr>
        <td>40113</td>
        <td>相対論</td>
        <td>黒川ジャック</td>
        <td>900教室</td>
        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
    </tr>
  </tbody>
  </table>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
@endsection
