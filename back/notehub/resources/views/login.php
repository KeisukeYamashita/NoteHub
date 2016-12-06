<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- これ以上のmeta属性タグは固定。これ以外に追加したかったら、これより下に作る。 -->
    <title>NoteHub ログインフォーム</title>
    <!-- Bootstrapのファイルをインポート -->
    <link href="/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li class="active"><a href="#login-access">在学生の方へ</a></li>
        <li><a href="/login_2">一般人・外部の方へ</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> NoteHubをはじめよう</h2>
          <CENTER>
          <img src="todai.png" width="50%" height="50%";></CENTER>
          <div id="buzzword"><h5>人は一人では何も成し遂げられない by John Donne</h5>
          <h5>みんなで講義を受けて、みんなで一つのノートを作るシステム</h5></div>
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action"{{ url('/login') }}">
            {{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">Email</label>

              <div class="col-md-6">
								<input id="email" type="text" class="form-control" name="email"
									placeholder="email@g.ecc.u-tokyo.ac.jp" tabindex="1" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $error->first('email') }}</strong>
                    </span>
                  @endif
              </div>
						</div>
						<div class="form-group{{ $errors->has('password') ? 'has-error' : ''}}">
							<label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
								<input type="password" class="form-control" name="password" id="password"
									placeholder="パスワード" value="" tabindex="2" />

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
						</div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
						      <div class="checkbox">
								    <label>
									    <input type="checkbox" name="remember" tabindex="3" />パスワードを記憶する
								    </label>
						      </div>
              </div>
            </div>

						<br/>
						<div class="form-group ">
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-primary" onclick="">ログインする</button>

                <a href="{{ url('/password/reset') }}" class="btn btn-link">
                  パスワードを忘れた場合
                </a>
						</div>
					</form>
				</div>
			</div>
		</section>
	</article>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
