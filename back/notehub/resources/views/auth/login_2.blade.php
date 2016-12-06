@extends('layouts.app')

@section('content')

  <div class="login-body">
    <article class="container-login center-block">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li ><a href="/login">在学生の方へ</a></li>
        <li class="active"><a href="#">一般人・外部の方へ</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> 大学のオープンソース化</h2>
          <h5 id="buzzword">そばで体験してみよう、日本の最高学府。</h5>
          <h5>みんなで講義を受けて、みんなで一つのノートを作るシステム</h5>
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
            <div class="form-group ">
              <label for="login" class="sr-only">Password</label>
                <input type="text" class="form-control" name="password" id="password"
                  placeholder="名前：東大太郎" value="" tabindex="2" />
            </div>
            <div class="form-group ">
              <label for="login" class="sr-only">Password</label>
                <input type="text" class="form-control" name="password" id="password"
                  placeholder="年齢：１８歳" value="" tabindex="2" />
            </div>
            <div class="form-group ">
              <label for="login" class="sr-only">Password</label>
                <input type="text" class="form-control" name="password" id="password"
                  placeholder="現所属：東京都立東京高校" value="" tabindex="2" />
            </div>
            <div class="form-group ">
              <label for="login" class="sr-only">Password</label>
                <input type="text" class="form-control" name="password" id="password"
                  placeholder="郵便番号：113-8654" value="" tabindex="2" />
            </div>
            <div class="form-group ">
              <label for="login" class="sr-only">Password</label>
                <input type="text" class="form-control" name="password" id="password"
                  placeholder="住所：東京都文京区本郷７丁目３−１" value="" tabindex="2" />
            </div>
						<div class="form-group ">
							<label for="login" class="sr-only">Email</label>
								<input type="text" class="form-control" name="login" id="login_value"
									placeholder="メールアドレス：email@gmail.comなど" tabindex="1" value="" />
						</div>
            <div class="form-group ">
              <label for="login" class="sr-only">Email</label>
                <input type="text" class="form-control" name="login" id="login_value"
                  placeholder="電話番号：08080808080" tabindex="1" value="" />
            </div>
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="パスワード" value="" tabindex="2" />
						</div>
            <div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="再パスワード入力" value="" tabindex="2" />
						</div>
						<div class="checkbox">
								<label class="control-label" for="remember_me">
									<input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" />パスワードをブラウザに記録します
								</label>
						</div>
						<br/>
						<div class="form-group ">
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary" onclick="">体験ログイン(10分間)</button>
						</div>
					</form>
				</div>
			</div>
    </div>
    </div>
    </div>
	</article>
</div>
@endsection
