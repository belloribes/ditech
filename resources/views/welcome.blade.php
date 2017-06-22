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
    {{-- <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('materialize/css/materialize.min.css') }}" rel="stylesheet">

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

        main {height: 100%; font-weight: 100; background-color: rgba(44, 47, 53, 0.8);}
        .container h2 {color: #e8e8e8; font-weight: 900; letter-spacing: -2px; font-size: 3.5em;}

        #form-login {margin: 0 auto;}
        #form-login .input-field {width: 100%;}
        #form-login .input-field input {color: #fff; border: 0; background: rgba(82, 86, 92, 0.7); width: 98%; padding-left: 2%; border-radius: 2px;}
        #form-login .input-field label {top: 0.9rem; left:0; margin-left: 0; color: #fff;}
        #form-login .input-field i.fa {top: 0.9rem; right: 0; font-size: 22px;}
        #form-login a {color: #e8e8e8; margin: 0 auto; word-spacing: 3px;}
        #form-login a:hover {text-decoration: underline;}
        #form-login input:focus, #form-login button { box-shadow: 0 1px 0 0 #f44263;}

        @media only screen and (max-width: 480px) {
            #form-login button {width: 100%}
        }
    </style>
</head>
<body>
    
    <!--Main layout-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 center-align white-text" style="margin-top: 5em;">
                    <h2>RESERV</h2>
                </div>
            </div>
            <div class="row">   
                <div class="col xl4 offset-xl4 l6 offset-l3 m6 offset-m3 s12 center-align">
                    <form id="form-login" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="icon_prefix" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required class="{{ $errors->has('email') ? 'invalid' : '' }}">
                                    <i class="fa fa-user prefix white-text"></i>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="input-field">
                                    <input id="icon_pass" type="password" name="password" placeholder="Senha" required class="{{ $errors->has('password') ? 'invalid' : '' }}">
                                    <i class="fa fa-lock prefix white-text"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <button class="btn btn-block waves-effect waves-light white-text red accent-2" type="submit">Login</button>
                            </div>
                                @if(count($errors->all()))
                                    <div class="col s12" style="margin-top: 10px;">
                                        <small class="red-text text-accent-2" style="font-size: 0.9em; font-weight: 400;">
                                            Login inválido! Verifique seus dados de acesso.
                                        </small>
                                    </div>
                                @endif
                        </div>

                        <div class="row" style="margin-top: 3em;">
                            <div class="col s12">
                                <a href="javascript:void(0);" class="white-text" data-toggle="modal" data-target="#myModal">CRIAR MINHA CONTA</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!--/Main layout-->

    <!-- Modal Register -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header grey accent-2 white-text">
                    <h5 class="modal-title">Registrar</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col m12">
                            <div class="input-field">
                                <i class="fa fa-user-circle prefix"></i>
                                <input id="icon_nome" type="text" class="validate">
                                <label for="icon_nome">Seu nome</label>
                            </div>

                            <div class="input-field">
                                <i class="fa fa-at prefix"></i>
                                <input id="icon_email" type="email" class="validate">
                                <label for="icon_email">Seu email</label>
                            </div>

                            <div class="input-field">
                                <i class="fa fa-lock prefix"></i>
                                <input id="icon_pass" type="password" class="validate">
                                <label for="icon_pass">Sua senha</label>
                            </div>

                            <div class="input-field">
                                <i class="fa fa-lock prefix"></i>
                                <input id="icon_passc" type="password" class="validate">
                                <label for="icon_passc">Confirmar sua senha</label>
                            </div>

                            <div class="center-align mt-2">
                                <button type="button" class="btn btn-block red accent-2 white-text waves-effect waves-light">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                </div> --}}
            </div>

        </div>
    </div>
    


    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('materialize/js/materialize.min.js') }}"></script>

</body>
</html>
