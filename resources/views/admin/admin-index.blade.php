
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>@yield('title')</title>



    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">





    <!-- Katniss CSS -->
    {{--<link rel="stylesheet" href="../css/katniss.css">--}}
    <link href="{{asset('css/katniss.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- ##### SIDEBAR LOGO ##### -->
<div class="kt-sideleft-header">
    <div class="kt-logo"><a href="http://laravel-blog/public/">Blog</a></div>
    <div id="ktDate" class="kt-date-today"></div>
    <div class="input-group kt-input-search">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn mg-0">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
    </div><!-- input-group -->
</div><!-- kt-sideleft-header -->

<!-- ##### SIDEBAR MENU ##### -->
<div class="kt-sideleft">
    <label class="kt-sidebar-label">Navigation</label>
    <ul class="nav kt-sideleft-menu">
        <li class="nav-item">
            <a href="/admin-panel" class="nav-link active">
                <i class="icon ion-ios-home-outline"></i>
                <span>Все посты</span>
            </a>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Создать...</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="/admin-panel/create" class="nav-link">Пост</a></li>

            </ul>
        </li><!-- nav-item -->



        <li class="nav-item">
            <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-list-outline"></i>
                <span>Комментарии</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="/comments/show" class="nav-link">Управление</a></li>

            </ul>
        </li><!-- nav-item -->


    </ul>
</div><!-- kt-sideleft -->

<!-- ##### HEAD PANEL ##### -->
<div class="kt-headpanel">
    <div class="kt-headpanel-left">
        <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
    </div><!-- kt-headpanel-left -->

    <div class="kt-headpanel-right">

        <div class="dropdown dropdown-profile">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>




        </div><!-- dropdown -->
    </div><!-- kt-headpanel-right -->
</div><!-- kt-headpanel -->
<div class="kt-breadcrumb">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Panel</span>
    </nav>
</div><!-- kt-breadcrumb -->

<!-- ##### MAIN PANEL ##### -->
<div class="kt-mainpanel">
    <div class="kt-pagetitle">
        <h5>Blog-Wezom</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">



        @include('admin.part.msg')
        @yield('content')


    </div><!-- kt-pagebody -->


</div><!-- kt-mainpanel -->


<script src="{{asset('lib/jquery/jquery.js')}}"></script>
<script src="{{asset('lib/popper.js/popper.js')}}"></script>
<script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('lib/moment/moment.js')}}"></script>
<script src="{{asset('lib/d3/d3.js')}}"></script>

<script src="{{asset('lib/chart.js/Chart.js')}}"></script>

<script src="{{asset('js/katniss.js')}}"></script>
<script src="{{asset('js/ResizeSensor.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
