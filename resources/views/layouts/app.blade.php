<html>
<head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

        <footer id="footer" class="footer_logo">
            <p>Copyright &copy; 2017 Todo List</p>
        </footer>
</body>
</html>