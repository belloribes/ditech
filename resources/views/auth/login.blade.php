<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RESERV - Sistema de Reservas de Salas</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            height: 100vh;
            margin: 0;
        }

        body {
            background-image: url('/img/bg_home3.min.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        main {height: 100%; font-weight: 100; background-color: rgba(44, 47, 53, 0.7);}
        .container h2 {color: #e8e8e8; font-weight: 900; letter-spacing: -2px; font-size: 3.5em;}

        #form-login {margin: 0 auto;}
        #form-login .input-field {width: 100%;}
        #form-login .input-field input {color: #fff; border: 0; background: rgba(82, 86, 92, 0.6); padding-left: 5px; border-radius: 2px;}
        #form-login .input-field label {top: 0.9rem; left:0; margin-left: 0; color: #fff;}
        #form-login .input-field i.fa {top: 0.9rem; right: 0; font-size: 22px;}
        #form-login a {color: #e8e8e8; margin: 0 auto; word-spacing: 3px;}
        #form-login a:hover {text-decoration: underline;}
        #form-login input:focus, #form-login button { box-shadow: 0 1px 0 0 #f44263;}
    </style>
</head>
<body>
    
    <!--Main layout-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-lg-12 text-center mt-5 text-white">
                    <h2>RESERV</h2>
                </div>
            </div>
            <div class="row mt-5">
                <form id="form-login" class="col-lg-4 col-md-6 col-sm-8 col-xs-8" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="row text-center">
                        <div class="col col-md-12">
                            <div class="input-field">
                                <input id="icon_prefix" type="text" placeholder="Email">
                                <i class="fa fa-user prefix text-white"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col col-md-12">
                            <div class="input-field">
                                <input id="icon_pass" type="password" placeholder="Senha">
                                <i class="fa fa-lock prefix text-white"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 text-center">
                        <div class="col col-md-12">
                            <button class="btn btn-block waves-effect waves-light text-white red accent-2" type="button">Login</button>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <a href="javascript:void(0);" class="text-white" data-toggle="modal" data-target="#myModal">CRIAR MINHA CONTA</a>
                    </div>
                </form>
            </div>
        </div>

        <div>
            @if(count($errors) > 0)

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            @endif
        </div>

    </main>
    <!--/Main layout-->

    <!-- Modal Register -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header grey accent-2 text-white">
                    <h5 class="modal-title">Registrar</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix"></i>
                                    <input id="icon_nome" type="text" class="validate {{ $errors->has('name') ? 'invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    <label for="icon_nome">Seu nome</label>
                                </div>

                                <div class="input-field">
                                    <i class="fa fa-at prefix"></i>
                                    <input id="icon_email" type="email" class="validate {{ $errors->has('email') ? 'invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    <label for="icon_email">Seu email</label>
                                </div>

                                <div class="input-field">
                                    <i class="fa fa-lock prefix"></i>
                                    <input id="icon_pass" type="password" class="validate {{ $errors->has('password') ? 'invalid' : '' }}" name="password" required>
                                    <label for="icon_pass">Sua senha</label>
                                </div>

                                <div class="input-field">
                                    <i class="fa fa-lock prefix"></i>
                                    <input id="icon_passc" type="password" class="validate" name="password_confirmation" required>
                                    <label for="icon_passc">Confirmar sua senha</label>
                                </div>

                                <div class="text-center mt-2">
                                    <button type="submit" class="btn btn-block red accent-2 text-white waves-effect waves-light">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                </div> --}}
            </div>

        </div>
    </div>
    
        {{-- <div>
            @if (Route::has('login'))
                <div>
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div> --}}

     

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('mdb/js/jquery-3.1.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('mdb/js/tether.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>

        <script type="text/javascript">
            @if(count($errors) > 0)
            $('#myModal').modal('show')
            @endif
        </script>
    </body>
</html>
