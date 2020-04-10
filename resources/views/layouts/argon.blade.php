<html lang="en">
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('components.argon.side-navbar')
<div class="main-content" id="panel">
    @include('components.argon.navbar')
    @include('components.argon.header')
    <div class="container-fluid mt--6">
        @yield('content')
        @include('components.argon.footer')
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
