<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <div class="container mx-auto mt-10 flex justify-center">
        <div class="border shadow-md rounded-md w-1/3 p-3">

        @yield('content')

        </div>
    </div>
</body>
</html>
