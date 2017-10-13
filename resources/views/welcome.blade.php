<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Organizer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css"> 
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
                height: 100vh;
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
				overflow: auto;
            }

            .title {
                font-size: 84px;
            }
			
			.column1, .column2, .column3 {
				width: 31.3%;
				float: left;
				margin: 1%;}
			.column3 {
				margin-right: 0%;}
			
			.page {
				overflow: auto;
				margin: 1%;
				padding: 25px 0;
				height: 232px;
				color: #212121;
				
				background: #fcf59b;
				background: 
					-webkit-gradient(
						linear,
						left top, left bottom,
						from(#81cbbc),
						color-stop(2%, #fcf59b)
					);
				-webkit-background-size: 100% 40px;
				}
			
			
			p{
				padding: 0 100px;
				line-height: 40px;
				margin-bottom: 40px;
				font-size: 18px;
				font-family: 'Great Vibes', cursive;
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
                    Organizer
                </div>

                <div class="links">
                    <a href="{{ url('/calender') }}">Todo</a>
                    <a href="https://laracasts.com">Schedule</a>
                    <a href="https://laravel-news.com">Budget</a>
                </div>
				<div class="page column1">
					<p><b>To Do</b></p>
					<p>
					@foreach($todos as $todo)
						 {{ $todo->title }}</br>				
					@endforeach
					<p>
				</div>
				<div class="page column2">
					<h4>Shifts</h4>
					<p>
						The man came he saw he conquered
						The man came he saw he conquered
						The man came he saw he conquered
						The man came he saw he conquered
					</p>
				</div>
				<div class="page column3">
					<p><b>Bills</b></p>
					<p>
						The man came he saw he conquered
						The man came he saw he conquered
						The man came he saw he conquered
						The man came he saw he conquered
					</p>
				</div>
					
            </div>


    </body>
</html>
