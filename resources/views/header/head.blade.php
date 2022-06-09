<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/icon/icon.png">
    <link rel="stylesheet" href="css/app.css">
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Zema</title>
</head>
<body class="scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full">
    <header class="flex justify-between items-center h-20 border-1 border-gray-200 shadow-lg z-10">
        <div class="w-auto flex justify-start items-center ml-10">
            <div class="ml-4 cursor-pointer">
                <img class="w-20" src="imgs/icon/icon.png" alt="Main Icon">
            </div>
            <div class="ml-4">
                <p id="zname" class="text-2xl text-gray-500">Zema</p>
            </div>
        </div>
        <div class="flex justify-between items-center mr-10">
            <a class="toplinks borderright" href="/home">Home</a>
            <a class="toplinks borderright" href="/news">News</a>
            <a class="toplinks borderright" href="#">Artist</a>
            <a class="toplinks borderright" href="#">About</a>
            <a class="toplinks" href="#">Contact </a>
        </div>
    </header>
    <main class=" scrollbar-thin">
        @yield('index')
        @yield('home')
    </main>
</body>
</html>