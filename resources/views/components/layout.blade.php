<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title ?? 'Hyperfocus' }}</title>
</head>
<body>

    <x-navigation.nav />
    
    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-navigation.footer />
    
    @if(session('emailSent'))
        <div class="alert alert-success position-fixed bottom-0 end-0 me-2 p-3">
            <div role="alert" aria-live="assertive" aria-atomic="true">
                <div>
                    {{ session('emailSent') }}
                </div>
            </div>
        </div>
    @endif

</body>
</html>