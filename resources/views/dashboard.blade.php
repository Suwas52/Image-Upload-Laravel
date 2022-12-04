<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main File</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="fluid-container">

        <div class="h3 text-center">Player Stats</div>


    </div>
    @yield('content')
    @yield('list')
</body>

</html>