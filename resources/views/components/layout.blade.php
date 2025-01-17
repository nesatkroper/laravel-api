<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Inventory System</title>
        <link rel="stylesheet" href="{{ url('dist/css/adminlte.css') }}" />
        <link rel="stylesheet" href="{{ url('fontawesome/css/all.css') }}" />
    </head>

    <body class="layout-fixed single bg-body-tertiary">
        <div class="app-wrapper">
            <x-header></x-header>
            <x-sidebar></x-sidebar>
            <main class="app-main">
                {{ $slot }}
            </main>
        </div>

        <script src="{{ url('dist/js/adminlte.js') }}"></script>
        <script src="{{ url('fontawesome/js/all.js') }}"></script>
    </body>
</html>
