<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    <div class="container">
    <h1>{{ __('content.country') }}</h1>

        @if (session('APP_LOCALE', config('app.locale')) == 'bn')
            <a href="{{route('switchLanguage',"en")}}" class="nav-link">English </a>

            @else
            <a href="{{route('switchLanguage',"bn")}}" class="nav-link">বাংলা</a>
        @endif

    </div>
</body>
</html>
