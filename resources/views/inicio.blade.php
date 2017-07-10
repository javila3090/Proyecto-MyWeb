@extends('app') 
@section('content')
<div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<ul class="nav navbar-nav navbar-left pull-left show-language">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span id="lanNavSel">&nbsp;English</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a id="navEsp" href="{{url('/')}}" class="language"><span id="lanNavEsp">Spanish</span></a></li>
                        </ul>
                    </li>
                </ul> 
                <a class="navbar-brand hidden-xs"><span class="fa fa-code" style="font-size:20px; color:#3498db;"></span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li> <a href="#home" class="smoothScroll">Home</a></li>
                    <li> <a href="#about" class="smoothScroll"> About</a></li>
                    <li> <a href="#services" class="smoothScroll"> Services</a></li>
                    <li> <a href="#experience" class="smoothScroll"> Experiencie</a></li>
                    <li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
                    <li> <a href="#contact" class="smoothScroll"> Contact</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right pull-right hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span id="lanNavSel">English</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="navEsp" href="{{url('/')}}" class="language"><img id="imgNavEsp" src="{{ 'assets/img/spain.png' }}" alt="Spanish" class="icon-small">  <span id="lanNavEsp">Spanish</span></a></li>                            
                        </ul>
                    </li>
                </ul>                
                <ul class="nav navbar-nav navbar-right pull-right">
                    @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>                            
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{url('/secure')}}" class="smoothScroll"> Go to Admin</a></li>
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
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div> 
<!-- ==== HEADERWRAP ==== -->
<div class="page-section" id="home">
    <div id="headerwrap" name="home">
        <header class="clearfix">
            <h1><img class="img img-rounded shadow-img" src="{{$about->route_img}}" height="270px" width="200px" alt=""></h1>            
            <h1>{{$about->first_name}} {{$about->last_name}} </h1>
            <h1><small>{{$about->position}}</small></h1>
            <br>
            <img src="assets/img/icon-tw.png" style="cursor: pointer;" onclick="javascript:window.open('https://twitter.com/{{$about->twitter}}','_blank')"/>
            <img src="assets/img/icon-fb.png" style="cursor: pointer;" onclick="javascript:window.open('https://facebook.com/{{$about->facebook}}','_blank')"/>
            <img src="assets/img/icon-lk.png" style="cursor: pointer;" onclick="javascript:window.open('https://ve.linkedin.com/in/{{$about->linkedin}}','_blank')"/>
        </header>
    </div>
</div><!-- /headerwrap -->
<!-- ==== ABOUT ==== -->
<div class="page-section">
    <div class="container" id="about" name="about">
        <div class="row white">
            <br>
            <h1 class="centered">A LITTLE ABOUT ME <span class="fa fa-user"></span></h1>
            <hr>
                
            <div class="col-lg-12">
                <p class="text-justify">{{$about->resume}}</p>
            </div><!-- col-lg-6 -->
                
        </div><!-- row -->
    </div><!-- container -->
    <!-- ==== SECTION SKILLS -->
    <section class="section-divider textdivider">
        <div class="container">
            <h2 class="text-center">SKILLS <span class="fa fa-code"></span></h2>
            <hr>
            @foreach($skills as $skill)
            <p><b>{{$skill->nombre}}</b></p>      
            <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{$skill->porcentaje}}%">{{$skill->porcentaje}}%</div>
            </div>
            @endforeach
            <br>
        </div><!-- container -->
    </section><!-- section -->
    <!-- ==== SECTION LANGUAGES -->
    <section class="section-divider textdivider">
        <div class="container">
            <h2 class="text-center">LANGUAGES  <span class="fa fa-language"></span></h2> 
            <hr>
            @foreach($languages as $language)
            <p><b>{{$language->name}} </b></p>      
            <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{$language->percentage}}%">{{$language->percentage}}</div>
            </div>
            @endforeach
            <br>
        </div><!-- container -->
    </section><!-- section -->
</div>
<!-- ==== SERVICES ==== -->
<div class=" page-section">
    <div class="container" id="services" name="services">
        <br>
        <div class="row white">
            <h1 class="centered">SERVICES <span class="fa fa-hand-o-left"></span></h1>
            <hr>
            <br>
            <!-- ==== GREYWRAP ==== -->
            <div id="">
                <div class="container" id="features">
                    <div class="row">
                        <div class="col-md-4 feature">
                            <i class="fa fa-html5"></i>
                            <h3>Web development</h3>
                            <div class="title_border"></div>
                            <p></p>
                        </div>
                        <div class="col-md-4 feature">
                            <i class="fa fa-mobile-phone"></i>
                            <h3>Mobile apps</h3>
                            <div class="title_border"></div>
                            <p></p>
                        </div>
                        <div class="col-md-4 feature">
                            <i class="fa fa-laptop"></i>
                            <h3>TI Consulting</h3>
                            <div class="title_border"></div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div><!-- greywrap -->
        </div>
    </div><!-- container -->
</div>
<br>
<!-- ==== WORK EXPERIENCE ==== -->
<div class=" page-section">
    <div class="container" id="experience" name="experience">
        <br>
        <div class="row white">
            <h1 class="centered">WORK EXPERIENCIE <span class="fa fa-desktop"></span></h1>
            <hr>
            <br>
            <br>
            <div class="w3-container w3-card-2 w3-white w3-margin-bottom">            
                <div class="w3-container">
                    @foreach($exps as $exp)
                    <h5 class="w3-opacity"><b>{{$exp->role}} / {{$exp->company}}</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ Carbon\Carbon::parse($exp->since)->format('m/Y') }} -  @if ($exp->until==null) <span class="w3-tag w3-teal w3-round"> Current @else{{ Carbon\Carbon::parse($exp->until)->format('m/Y') }}@endif</span></h6>
                    <p>{{$exp->description}}</p>
                    <hr>
                    @endforeach
                </div>
            </div>            
        </div><!-- row -->
    </div><!-- container -->
</div>
<!-- ==== PORTFOLIO ==== -->
<div class=" page-section">
    <div class="container" id="portfolio" name="portfolio">
        <br>
        <div class="row">
            <br>
            <h1 class="centered">PORTFOLIO <span class="fa fa-cogs"></span></h1>
            <hr>
            <br>
        </div><!-- /row -->
        <div class="col-lg-12">
            <div class="row">	
                @foreach($portfolio as $key => $pf)
                <!-- PORTFOLIO IMAGE 1 -->
                <div class="col-md-4 ">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="{{$pf->route}}" alt="">
                            <figcaption>
                                <a data-toggle="modal" href="#myModal{{$key+1}}" class="btn btn-primary btn-lg">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->
                    
                <!-- MODAL SHOW THE PORTFOLIO IMAGE. -->
                  
				<div class="modal fade" id="myModal{{$key+1}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">  
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">{{$pf->title}}</h4>
                            </div>
                            <div class="modal-body text-center">
								<p><img src="{{$pf->route}}" alt=""></p>
								<p>{{$pf->description}}</p>
								<p><b><a href="{{$pf->url}}" target="_blank">Visit Site</a></b></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-page-section -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                    
                @endforeach   
            </div><!-- /row -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<div class="container page-section-contact" id="contact" name="contact">
    <div class="row">
        <br>
        <h1 class="centered">CONTACT <span class="fa fa-link"></span></h1>
        <hr>
        <br>
        <div class="col-lg-6">
            <h3 class="text-center">Contact Information</h3>
            <p class="text-center"><span class="icon icon-home"> </span> Caracas, Venezuela<br/>
                <span class="icon icon-mobile"> </span> +58 424 3700897 <br/>
                <span class="icon icon-envelop"> </span> <a href="#"> javila3090@gmail.com</a> <br/>
                <span class="icon icon-twitter"> </span> <a target="blank" href="http://twitter.com/jcesaravila"> @jcesaravila </a> <br/>
                <span class="icon icon-facebook"> </span> <a target="blank" href="http://facebook.com/kaiser3090"> Kaiser3090 </a> <br/>
                <span class="icon icon-github"> </span> <a target="blank" href="http://github.com/javila3090"> javila3090 </a> <br/>
            </p>
        </div><!-- col -->
        <hr class="none">
        <div class="col-lg-6">
            <!--Incluir mensaje de error-->
            @if (count($errors) > 0)
            @include('partials.errors')
            @endif
                
            <!--Incluir mensaje de éxito-->
            @include('partials.messages') 
                
            <div id="resultado"></div>
            <h3>Write me for quotes, questions or suggestions</h3>
            {!! Form::open(['route' => 'store/message', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'contactForm']) !!}
            <div class="form-group">
                <label for="email" class="col-lg-4 control-label"></label>
                <div class="col-lg-10">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-lg-4 control-label"></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="sender" name="sender" placeholder="Your Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="col-lg-4 control-label"></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="sender" name="subject" placeholder="Subject" required>
                </div>
            </div>            
            <div class="form-group">
                <label for="message" class="col-lg-4 control-label"></label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="message" id="message" placeholder="Your message" required></textarea>
                </div>
            </div> 
            <div class="form-group">
                <div class="col-lg-10">
                    <button type="submit" class="btn btn-success">Submit <span class="fa fa-send"></span></button>
                </div>
            </div>
                
            {!! Form::close() !!}<!-- form -->
            </p>
        </div><!-- col --> 
    </div><!-- row -->
</div><!-- container -->
<div id="footerwrap">
    <div class="container">
        <h6 style="color:white;"><span class="fa fa-copyright"></span> Julio Avila 2017 - All rights reserved</h6>
    </div>
</div>
@endsection
