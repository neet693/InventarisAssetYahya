<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Manajemen Asset</title>
    @include('Layouts.style')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            {{-- Isi Sidebar --}}
            @include('Layouts.sidebar')
        </div>
        {{-- Content Yield --}}
        <div id="main">
            @yield('content')
            @include('Layouts.footer')
        </div>
    </div>
    @include('Layouts.js')
</body>

</html>
