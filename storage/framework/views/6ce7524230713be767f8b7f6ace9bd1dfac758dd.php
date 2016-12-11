<?php $__env->startSection('content'); ?>

<div class="login-body">
  <atricle class="container-login center-block">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
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
                  <form method="POST" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action"<?php echo e(url('/login')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group<?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                      <label for="email" class="col-md-4 control-label">Email</label>

                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email"
                        placeholder="email@g.ecc.u-tokyo.ac.jp" tabindex="1" value="<?php echo e(old('email')); ?>">

                        <?php if($errors->has('email')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                      <label for="password" class="col-md-4 control-label">Password</label>

                      <div class="col-md-6">
                        <input type="password" class="form-control" name="password" id="password"
                        placeholder="パスワード" value="" tabindex="2" />

                        <?php if($errors->has('password')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                        <?php endif; ?>
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

                      <a href="<?php echo e(url('/password/reset')); ?>" class="btn btn-link">
                        パスワードを忘れた場合
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </article>
      </div>
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>