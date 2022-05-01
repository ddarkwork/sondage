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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="description" content="@yield("admin_description")">
    <title>BigScreen - @yield("admin_title")</title>
</head>
<body>
    <div class="container">
        @yield("admin_content")
    </div>
</body>
</html>