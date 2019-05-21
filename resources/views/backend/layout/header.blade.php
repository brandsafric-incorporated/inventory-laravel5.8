<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Blog Frontend with Backenf">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Inventory | Management</title>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('backend/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('backend/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('backend/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.css') }}" type="text/css">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('backend/css/fullcalendar.css') }}">
  <link href="{{ asset('backend/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ asset('backend/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <script src="{{ asset('backend/js/jquery.js')}}"></script>
  <script src="{{ asset('backend/js/jquery-1.8.3.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.9/dist/vue.js"></script>
</head>
<body>
  <!-- container section start -->
  <section id="container" class="">
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <!--logo start-->
      <a href="" class="logo">Inventory <span class="lite">Management</span></a>
      <!--logo end-->
      </div>
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
              <span class="username"></span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="nav-item dropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
              <li class="nav-item dropdown">
                <a href="" class="dropdown-item">
                  Password
                </a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->