<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>NoteHub</title>

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/index.css">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img src="hub.png"  class="notehub-logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                  

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="navbar-button"><a class="home" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> ホーム</a></li>
                        <li class="navbar-button"><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> サービス</a></li>

                    </ul>
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a class="navbar-login" href="<?php echo e(url('/login')); ?>" style="color:#ffffff"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> ログイン</a></li>
                            <li><a class="navbar-login" href="<?php echo e(url('/register')); ?>" style="color:#ffffff"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 新規登録</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    ログアウト
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    // <script src="/js/app.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
