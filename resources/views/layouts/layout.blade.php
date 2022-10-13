<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png" type="image/png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/fontawesome.css') }}">

    @yield('css')

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                @include('layouts.sidebar-header')
                @include('layouts.sidebar-menu')
            </div>
        </div>
        <div id="main">
            @include('layouts.header')
            
            @yield('content')

            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script>
        @if (Session::has('failed'))
            Toastify({
                text: "{{ Session::get('failed') }}",
                duration: 3000,
                style: {
                    background: '#c0392b'
                },
                close: true
            }).showToast();
        @endif
        @if (Session::has('success'))
            Toastify({
                text: "{{ Session::get('success') }}",
                duration: 3000,
                style: {
                    background: '#27ae60'
                },
                close: true
            }).showToast();
        @endif
        @if(isset($errors) && count($errors) > 0)
            @forelse ($errors->messages() as $index => $values)
                    Toastify({
                        text: `
                            {{ $index }}
                            @foreach ($values as $value)
                                {{ $value }} <br>
                            @endforeach
                            `,
                        duration: 3000,
                        style: {
                            background: '#c0392b'
                        },
                        close: true
                    }).showToast();
            @empty
                
            @endforelse
        @endif
</script>
@yield('script')

</body>

</html>
