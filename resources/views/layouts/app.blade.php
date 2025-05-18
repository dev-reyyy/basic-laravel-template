<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 1em 4em
        }
        .navbar .button-container {
            display: flex;
            gap: 1em;
        }
        .container {
            padding-left: 4em;
            padding-right: 4em;
        }
    </style>
</head>
<body>
    <header>
        <x-navbar/>
    </header>
    <main>
        <div class="container">
            {{-- Display Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            @yield('content')
        </div>
    </main>
</body>
</html>