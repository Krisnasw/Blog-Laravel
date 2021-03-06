<!doctype html>
<html lang="en">
    <head>
    	<meta charset="utf-8" />
    	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    	<title>Personal Christiawan</title>

    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        {{ Html::style('assets/css/bootstrap.min.css') }}

        {{-- Core JS Files   --}}
        {{ Html::style('assets/css/bootstrap-multiselect.css') }}

        {{--  DATE   --}}

        {{ Html::style('assets/plugin/datepicker/css/bootstrap-material-datetimepicker.css') }}
        {{ Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') }}

        {{-- Animation library for notifications   --}}
        {{ Html::style('assets/css/animate.min.css') }}

        {{-- Light Bootstrap Table core CSS    --}}
        {{ Html::style('assets/css/light-bootstrap-dashboard.css') }}

        {{-- SweetAlert Plugins   --}}
        {{ Html::style('assets/plugin/sweetalert/sweetalert.css') }}
        {{ Html::script('assets/plugin/sweetalert/sweetalert.min.js') }}
        <!--     Fonts and icons     -->
        {{ Html::style('assets/css/font-awesome.min.css') }}
        {{ Html::style('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}
        {{ Html::style('assets/css/pe-icon-7-stroke.css') }}

        @include('tinymce::tpl')
    </head>

    <body>
        <div class="wrapper">
