<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body>
    <header>
        <x-navbar/>
    </header>

    <main>
        <div class="fixed top-5 right-5 flex flex-col space-y-4 z-50">
            {{-- Flash Toast Message from Session --}}
            @if(session('toast'))
                <x-toast 
                    type="{{ session('toast')['type'] }}" 
                    message="{{ session('toast')['message'] }}" 
                />
            @endif
        </div>
    
        @yield('content')
    </main>
</body>
</html>