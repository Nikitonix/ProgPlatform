<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programming Platform - главная</title>
    <link rel="icon" href="{{asset("plugins/mainThemePlugins/img/Fevicon.png")}}" type="image/png">

    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/vendors/bootstrap/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/vendors/fontawesome/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/vendors/themify-icons/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/vendors/linericon/style.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/vendors/owl-carousel/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/vendors/owl-carousel/owl.carousel.min.css")}}">

    <link rel="stylesheet" href="{{asset("plugins/mainThemePlugins/css/style.css")}}">
</head>
<body>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="{{route('main.home')}}">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('main.courses.index')}}">Курсы</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('main.documentation.index')}}">Документация</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('main.forum.index')}}">Форум</a></li>
                    </ul>

                    @guest
                    <ul class="navbar-right">
                        <li class="nav-item">
                            <button class="button button-header bg">Авторизация</button>
                        </li>
                    </ul>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</header>
@yield('content')
<script src=""></script>
<script src="{{asset("plugins/mainThemePlugins/vendors/jquery/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("plugins/mainThemePlugins/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("plugins/mainThemePlugins/js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("plugins/mainThemePlugins/js/mail-script.js")}}"></script>
<script src="{{asset("plugins/mainThemePlugins/js/main.js")}}"></script>
</body>
</html>
