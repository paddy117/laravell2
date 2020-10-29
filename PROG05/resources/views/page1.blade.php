<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@csrf
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            .flex-container {
                display: flex;
                flex-wrap: nowrap;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }


            div.gallery {
                display: block;
                margin: 10px;
                border: 1px solid #ccc;
                width: 300px;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
                text-decoration: none;
            }


            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
                font-size: 13px;
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
                    <form action="{{route('resultpage')}}">

                    <div class="form group">
                        <label for="search"></label>
                        <input id="search" type="text" placeholder="Search.."  name="search" >
                        <button>search</button>

                    </div>
                    </form>
                    <form action="{{route('resultpage')}}">

                        <div class="form group">
                            <div class="form group">
                                <label for="category_id"></label>
                                <select id="catergory_id" name="category_id">
                                    <option value="1">Eerste wereldoorlog</option>
                                    <option value="2">Tweede wereld oorlog</option>
                                    <option value="3">Koude oorlog</option>
                                    <option value="4">modern</option>
                                </select>
                            </div>
                            <button>search</button>
                        </div>
                    </form>
                    @auth
                        <a href="{{ url('/home') }}">account</a>
                        <a href="{{route('createpost')}}">create post</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Page1
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>

                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>



{{--loop om data uit database te halen--}}
                <div class="flex-container">
                    <tr>
                        @foreach($id as $postsindex)
                        <td>
                            <div class="gallery">
                                <a target="_self" href="post/{{ $postsindex -> id}}">
                                <img src="{{ $postsindex->image}}" alt="{{ $postsindex->title}}" width="600" height="400">
                                <div class="desc">{{$postsindex->description}}</div>
                                </a>
                            </div>
                        </td>
                @endforeach
                    </tr>
                </div>
            </div>
        </div>
    </body>
</html>
