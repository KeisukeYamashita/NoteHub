@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
    <div class="panel-body">
    <div class = "make-all-channel">
      <table class="table">
        <thead>
        </thead>
          <tr>
            <th>授業コード</th>
            <th>講義名</th>
            <th>担当教員</th>
            <th>出席人数</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>11001</th>
            <td>相対論</td>
            <td>大川湯川</td>
            <td>30</td>
          </tr>
          <tr>
            <th>10001</th>
            <td>有機合成化学</td>
            <td>満島昂佑</td>
            <td>90</td>
          </tr>
          <tr>
            <th>00111</th>
            <td>比較思想</td>
            <td>氷川学</td>
            <td>50</td>
          </tr>
        </tbody>
        </thead>
      </table>
    </div>
  </div>
  </div>
  </div>
@endsection
