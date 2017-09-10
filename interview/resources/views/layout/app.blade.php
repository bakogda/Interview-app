<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--DataTables -->

        <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
        <script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>
        <link href="https://datatables.yajrabox.com/css/app.css" rel="stylesheet">
        <link href="https://datatables.yajrabox.com/css/demo.css" rel="stylesheet">
        <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,800' rel='stylesheet'
        type='text/css'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'
        type='text/css'>
        <link rel="stylesheet" href="https://datatables.yajrabox.com/highlight/styles/zenburn.css">
        <script src="https://datatables.yajrabox.com/highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
              <!-- height: 100vh; -->
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .h2
            {
                font-size: 30px;
                text-align: center;
                margin-bottom: 1%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .row-form
            {
              margin-top: 4%;
            }

            .table-past
            {
              margin-top: 4%;
              margin-bottom: 4%;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @section('body')
                    @show
                </div>

                <div class="links">
                    <a href="http://127.0.0.1:8000/">Welcome</a>
                    <a href="http://127.0.0.1:8000/members">Members</a>
                    <a href="http://127.0.0.1:8000/mpages/create">Memberships</a>
                    <a href="http://127.0.0.1:8000/pages/create">Add Member</a>
                    <a href="https://github.com/laravel/laravel">Income</a>
                </div>
            </div>
        </div>
        @section('main')
        @show
    </body>
</html>
