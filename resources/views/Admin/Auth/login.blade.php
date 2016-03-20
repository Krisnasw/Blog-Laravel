<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login/Logout animation concept</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
        {{ Html::style('assets/css/style_login.css') }}
        {{-- SweetAlert Plugins   --}}
        {{ Html::style('assets/plugin/sweetalert/sweetalert.css') }}
        {{ Html::script('assets/plugin/sweetalert/sweetalert.min.js') }}
    </head>
    <body>
        <div class="cont">
        <div class="demo">
        <div class="login">
            <div class="logo">
                <img src="{{ asset('assets/img/mylogo.png') }}" width="40%" alt="..."/>
            </div>
            <form class="" action="{{ route('admin.login')}}" method="post">
                <div class="login__form">
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                        <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input type="text" class="login__input name" name="username" placeholder="Username"/>
                        {{ ($errors->has('username')) ? $errors->first('username') : ''}}
                    </div>
                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                        <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" class="login__input pass" name="password" placeholder="Password"/>
                        {{ ($errors->has('password')) ? $errors->first('password') : ''}}
                    </div>
                    <button type="submit" name="Submit" class="login__submit">Sign in</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </div>
            </form>
        </div>
        </div>
        </div>
        {{ Html::script('assets/js/jquery.min.js') }}
        {{ Html::script('assets/js/login.js') }}
        @if (Session::has('sweet_alert.alert'))
            <script>
              swal({!! Session::get('sweet_alert.alert') !!});
            </script>
        @endif
    </body>
</html>
