<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <a class="navbar-brand" href="{{ url('/') }}">
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
                        <li class="navbar-button"><a href="/#service"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> サービス</a></li>

                    </ul>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="navbar-log" href="{{ url('/login') }}" style="color:#ffffff"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> ログイン</a></li>
                            <li><a class="navbar-log" href="{{ url('/register') }}" style="color:#ffffff"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 新規登録</a></li>
                        @else
                        <li >
                        <a class="welcome navbar-button" style="color:#00acff" href="{{url('/home')}}">ようこそ、{{Auth::user()->name}} さん
                        </a></li>
                            <li class="dropdown navbar-log">
                                <a href="{{ url('/logout')  }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="color:#fff"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    ログアウト
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
