<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RefKe</title>

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
            }

            .title {
                font-size: 84px;
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
            #imgbkn{
                background-image: url('../children.jpeg');
                /* to view the image in 100% height...cover the landing page heightwise...use the whole window*/
                height: 100vh; 
                /* to see the whole image */
                background-size: cover;
                /* center the image */
                background-position: center;
                /* makes it a flex container... it will align all items i.e. the
                h1s, paragraphs horizontally as flex items*/
                display: flex;
                /* change the flex to a column... i.e the text(header, paragraph, link will go below each other */
                flex-direction: column;
                /* move text to the middle of the page */
                justify-content: center;
                /* move content to the middle */
                align-items: center;
                /* move text to the middle when resizing the page */
                text-align: center;
                /* when screen is resized the spacing will not be affected */
                padding: 0 20px;
            }

            #imgbakgn h1{
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->
            <header id="imgbkn">
                <div class="content">
                    <h1>Charity sees the need not the cause</h1>
                </div>
            </header>
        </div>
    </body>
</html>
