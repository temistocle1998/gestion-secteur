<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/materialdesignicons.min.css') }}"  rel="stylesheet">
        <link href="{{ asset('theme/css/style.min.css') }}"  rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
       .lyear-wrapper {
  position: relative;
}
.lyear-login {
  display: flex !important;
  min-height: 100vh;
  align-items: center !important;
  justify-content: center !important;
}
.login-center {
  background: #fff;
  min-width: 38.25rem;
  padding: 2.14286em 3.57143em;
  border-radius: 5px;
  margin: 2.85714em 0;
}
.login-header {
  margin-bottom: 1.5rem !important;
}
.login-center .has-feedback.feedback-left .form-control {
  padding-left: 38px;
  padding-right: 12px;
}
.login-center .has-feedback.feedback-left .form-control-feedback {
  left: 0;
  right: auto;
  width: 38px;
  height: 38px;
  line-height: 38px;
  z-index: 4;
  color: #dcdcdc;
}
.login-center .has-feedback.feedback-left.row .form-control-feedback {
  left: 15px;
}
            </style>
    </head>
    <body>
        <div class="row lyear-wrapper">
            <div class="lyear-login">
              <div class="login-center">
                <div class="login-header text-center">
                    <a href="/"> 
                        <img alt="light year admin" src="{{ asset('theme/images/logo-sidebar.png')}}"> 
                    </a>
                </div>
            @yield('content')
             </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('theme/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    </body>
</html>
