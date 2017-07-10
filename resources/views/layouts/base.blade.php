<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ 'assets/img/favicon.ico' }}">
        <title>{{ config('app.name', 'Julio Avila') }}</title>
        
        <!-- Styles --> 
        {!! Html::style('/css/app.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/Datatable.Boostrap.min.css') !!}
        {!! Html::style('assets/css/font-awesome.min.css') !!}
        {!! Html::style('assets/css/metisMenu.min.css') !!}
        {!! Html::style('assets/css/morris.css') !!}
        {!! Html::style('assets/css/sb-admin-2.css') !!}
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div id="app"> 
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/secure')}}">julioavila.com.ve</a>
                </div>
                <!-- /.navbar-header -->
                
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            @foreach($messages as $message)
                                    <li>
                                        <a href="{{ route('open/message', $message) }}">
                                            <div>
                                                <b>{{$message->sender}}</b>
                                                <span class="pull-right text-muted">
                                                    <em>{{$message->created_at}}</em>
                                                </span>
                                            </div>
                                            <div>{{$message->subject}}</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                            @endforeach
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{url('/')}}" class="smoothScroll"> Go to Site</a></li>
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
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!--<li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group
                            </li>-->
                            <li>
                                <a href="{{url("/secure")}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> Sections<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>                                        
                                        <a href="#">About me<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="{{url("secure/section/aboutMe/es")}}">Spanish</a>
                                                <a href="{{url("secure/section/aboutMe/en")}}">English</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url("secure/section/languages")}}">Languages</a>
                                    </li>                                    
                                    <li>
                                        <a href="{{url("secure/section/skills")}}">Skills</a>
                                    </li>
                                    <li>
                                        <a href="{{url("secure/section/experience")}}">Experience</a>
                                    </li>
                                    <li>
                                        <a href="{{url("secure/section/portfolio")}}">Portfolio</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="{{url("secure/section/messages")}}"><i class="fa fa-envelope-o fa-fw"></i> Messages</a>
                                <!--<ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url("/section/messages")}}">Read</a>
                                    </li>                                    
                                </ul>-->
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="https://analytics.google.com" target="blank"><i class="fa fa-bar-chart-o fa-fw"></i> Google Analytics</a>
                            </li>                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            @yield('content')
        </div>
        
        <!-- Scripts -->
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/Datatable.min.js') !!}
        {!! Html::script('assets/js/Datatable.Bootstrap.min.js') !!}
        {!! Html::script('assets/js/sb-admin-2.js') !!}
        {!! Html::script('assets/js/metisMenu.min.js') !!}
        {!! Html::script('assets/js/custom-functions.js') !!}
    </body>
</html>
