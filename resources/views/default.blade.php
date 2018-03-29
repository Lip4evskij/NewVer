<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Blog Wezom</title>
    <meta name="keywords" content="free css templates, tripod, blog, theme" />
    <meta name="description" content="Tripod - free CSS template provided by templatemo.com" />
    <link href="{{asset('css/templatemo_style.css')}}" rel="stylesheet" type="text/css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">

        <div id="site_title">
            <h1><a href="">
                    <img src="{{asset('img/templatemo_logo.png')}}" alt="tripod blog" /></a>
                <span>free blog template</span>
            </h1>
        </div>

        <div id="templatemo_rss">
            <a href="" target="_parent">SUBSCRIBE<br /><span>OUR FEED</span></a>
        </div>

    </div> <!-- end of header -->

    <div id="templatemo_menu">

        <ul>
            <li><a href="/" class="current">Главная</a></li>
            <li><a href="{{route('ContactsController')}}">О проекте</a></li>
            <li><a href="{{route('Contacts')}}">Контакты</a></li>
        </ul>

    </div> <!-- end of templatemo_menu -->

</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
    <div id="templatemo_content_wrapper">


        <div id="templatemo_content">

            @include('admin.part.msg')
            @yield('content')

        </div>



        <div id="templatemo_sidebar_one">

            <h4>Категории</h4>
            <ul class="templatemo_list">
                <li><a href="{{route('ShowSport','sport')}}">Спорт</a></li>
                 <li><a href="{{route('ShowCulture','culture')}}">Культура</a></li>
                 <li><a href="{{route('ShowPolicy','policy')}}">Политика</a></li>

            </ul>

            <div class="cleaner_h40"></div>



            <div class="cleaner_h40"></div>



        </div>

        <div id="templatemo_sidebar_two">

            <div class="banner_250x200">
                <?php
                $videofile = "../video.txt";   //путь к файлу
                if ($quotes = file("$videofile"))
                {
                    $quote = rand(0, sizeof($quotes)-1);
                    echo $quotes[$quote];   //вывод рандомного текста
                }
                else
                {
                    echo ("Ошибка вывода видео");   //вывод сообщения, если файл не найден
                }
                ?>
            </div>

            <div class="banner_125x125">

                <a href="" target="_parent"><img src="{{asset('img/templatemo_ads.jpg')}}" alt="web 1" /></a>
                <a href="" target="_parent"><img src="{{asset('img/templatemo_ads.jpg')}}" alt="web 2" /></a>
                <a href="" target="_parent"><img src="{{asset('img/templatemo_ads.jpg')}}" alt="templates 2" /></a>
                <a href="" target="_parent"><img src="{{asset('img/templatemo_ads.jpg')}}" alt="templates 1" /></a>
            </div>

            <div class="cleaner_h40"></div>



        </div>

        <div class="cleaner"></div>
    </div> <!-- end of content wrapper -->
</div>

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

        Copyright © 2048 <a href="#">Your Company Name</a> |
        <a href="http://bayguzin.ru/" target="_parent">Website Templates</a> by <a href="http://bayguzin.ru/" target="_parent">Free CSS Templates</a>

    </div> <!-- end of templatemo_copyright -->
</div> <!-- end of copyright wrapper -->

</body>
</html>