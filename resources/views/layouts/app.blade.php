<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Art</title>
</head>
<body class="bg-gray-200">
<div class="py-6 bg-white flex justify-between mb-4">
    <!-- An unexamined life is not worth living. - Socrates -->
    <ul class="flex items-center">
        <li>
            <a href="" class="p-3 hover:text-blue-700">Home</a>
        </li>
        <li>
            <a href="" class="p-3 hover:text-blue-700">Dashboard</a>
        </li>
        <li>
            <a href="" class="p-3 hover:text-blue-700">Art</a>
        </li>
    </ul>

    <ul class="flex items-center">
        @auth
            <li>
                <a href="" class="p-3 hover:text-blue-700">Ryan McBride</a>
            </li>
            <li>
                <form action="{{route('logout')}}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth

        @guest
        <li>
            <a href="{{route('login')}}" class="p-3 hover:text-blue-700">Login</a>
        </li>
        <li>
            <a href="{{route('register')}}" class="p-3 hover:text-blue-700">Register</a>
        </li>
        @endguest
    </ul>
</div>



@yield('content')
</body>
</html>
