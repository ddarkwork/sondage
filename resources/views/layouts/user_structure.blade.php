<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts bootstrap -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="description" content="@yield("description")">
    <title>BigScreen - @yield("title")</title>
</head>
<body>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>