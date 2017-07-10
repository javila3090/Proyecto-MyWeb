<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Julio Avila</title>
        <link rel="shortcut icon" href="{{ 'assets/img/favicon.ico' }}">
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/main.css') !!}
        <!-- {!! Html::style('assets/css/icomoon.css') !!}
        {!! Html::style('assets/css/animate-custom.css') !!} -->
        {!! Html::style('assets/css/w3.css') !!}
        {!! Html::style('assets/css/font-awesome.min.css') !!}
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-90738637-2', 'auto');
		  ga('send', 'pageview');
		</script>
    </head>
    <body data-spy="scroll" data-offset="100" data-target="#navbar-main">	
        @yield('content')        
        <!-- Scripts -->
        <!--{!! Html::script('assets/js/jquery.min.js') !!}
		{!! Html::script('assets/js/modernizr.custom.js') !!}
		{!! Html::script('assets/js/jquery-func.js') !!}			
        {!! Html::script('assets/js/bootstrap.min.js') !!}
		{!! Html::script('assets/js/smoothscroll.js') !!} 			
		{!! Html::script('assets/js/custom-functions.js') !!}  
		{!! Html::script('assets/js/retina.js') !!}
        {!! Html::script('assets/js/jquery.easing.1.3.js') !!}-->
		
		{!! Html::script('assets/js/jquery.min.js') !!}				
                {!! Html::script('assets/js/bootstrap.min.js') !!}
		{!! Html::script('assets/js/smoothscroll.js') !!}		
		{!! Html::script('assets/js/modernizr.custom.js') !!}				
		{!! Html::script('assets/js/custom-functions.js') !!}
                {!! Html::script('assets/js/text-slider.js') !!}
		<!-- {!! Html::script('assets/js/jquery-func.js') !!}        
        {!! Html::script('assets/js/retina.js') !!}
        {!! Html::script('assets/js/jquery.easing.1.3.js') !!}-->		
    </body>
</html>
