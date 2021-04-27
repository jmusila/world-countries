<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="/countries/save" method="POST">
        @csrf
            <div class="form-group">
                <button type="submit" class="btn-btn-success"></button>
            </div>
        </form>
    </div>
</body>
</html>