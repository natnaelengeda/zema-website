<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/main_icon/icon.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Zema</title>
</head>
<body>
    <header class="flex justify-between items-center h-20 border-1 border-gray-200 shadow-lg">
        <div class="w-auto flex justify-start items-center ml-10">
            <div class="ml-4 cursor-pointer">
                <img class="w-20" src="imgs/icon/icon.png" alt="Main Icon">
            </div>
            <div class="ml-4">
                <p id="zname" class="text-2xl text-gray-500">Zema</p>
            </div>
        </div>
        <div class="flex justify-between items-center mr-10">
            <a class="toplinks borderright" href="/">Homes</a>
            <a class="toplinks borderright" href="#">News</a>
            <a class="toplinks borderright" href="#">Artist</a>
            <a class="toplinks borderright" href="#">About</a>
            <a class="toplinks" href="#">Contact </a>
        </div>
    </header>
    <main class="mt-5">
        @yield('index')
    </main>
</body>
</html>