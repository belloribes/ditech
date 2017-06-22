<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('materialize/css/materialize.min.css') }}" rel="stylesheet">

    <style type="text/css">
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }

    header, main, footer, .nav-wrapper {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer, .nav-wrapper {
        padding-left: 0;
      }
    }
    </style>

    <!-- Scripts -->
    <script>
        // Sidenav Initialization
        // $(".button-collapse").sideNav();

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
	<!--Navbar-->
	<nav class="z-depth-0 white">
		<div class="nav-wrapper">
			{{-- <a href="#!" class="brand-logo">RESERV</a> --}}
			{{-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-navicon"></i></a> --}}
            {{-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> --}}
            <a href="#" data-activates="slide-out" class="button-collapse red-text text-accent-2"><i class="material-icons">menu</i></a>
			<ul class="right">
				{{-- <li><a href="sass.html">Sass</a></li> --}}
				{{-- <li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">Javascript</a></li> --}}
				{{-- <li><a href="mobile.html">Mobile</a></li> --}}

				<!-- Dropdown Trigger -->

                <li><a href="#"><i class="material-icons red-text text-accent-2">notifications_active</i></a></li>
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons red-text text-accent-2">perm_identity</i></a></li>
			</ul>
		</div>
	</nav>

    <ul id="slide-out" class="side-nav fixed blue-grey darken-4">
        <li>
            <div class="red accent-2 white-text" style="height: 64px; padding-left: 1em; padding-top: 6px; font-size: 2.2em; font-weight: 200">
                RESERV
            </div>
        </li>
        <li class="active"><a href="{{ route('home') }}" class="blue-grey-text text-lighten-4"><i class="material-icons blue-grey-text text-lighten-4">home</i> Home</a></li>
        <li><a href="#!" class="blue-grey-text text-lighten-4"><i class="material-icons blue-grey-text text-lighten-4">person_pin_circle</i> Reservas</a></li>
        <li><a href="{{ route('rooms') }}" class="blue-grey-text text-lighten-4"><i class="material-icons blue-grey-text text-lighten-4">place</i> Salas</a></li>
        <li><a href="#!" class="blue-grey-text text-lighten-4"><i class="material-icons blue-grey-text text-lighten-4">apps</i> Locais</a></li>
        <li><a href="#!" class="blue-grey-text text-lighten-4"><i class="material-icons blue-grey-text text-lighten-4">perm_identity</i> Usuários</a></li>
    </ul>
    {{-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> --}}

	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">one</a></li>
		<li><a href="#!">two</a></li>
		<li class="divider"></li>
		<li><a href="#!">three</a></li>
	</ul>
	<!--/.Navbar-->

    <main class="grey lighten-4">
        @yield('content')
    </main>

    {{-- <footer class="page-footer grey lighten-3" style="padding: 0">
        <div class="footer-copyright">
            <div class="container  grey-text ">
                © 2017 RESERV
                <a class="grey-text right" href="#!">More Links</a>
            </div>
        </div>
    </footer> --}}

     
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('materialize/js/materialize.min.js') }}"></script>

    <script> 
        $( document ).ready(function(){
        	$(".button-collapse").sideNav();
            $('.modal').modal();
            $('select').material_select();
        });

    </script>
</body>
</html>
