<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/icon/icon.png">
    <link rel="stylesheet" href="css/app.css">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Zema</title>
</head>
<body class="scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full overflow-x-hidden">
<!-- <body>     -->
<header class="flex justify-between items-center h-20 border-1 border-gray-500 bg-white shadow-lg z-40 fixed w-full">
        <div class="w-auto flex justify-start items-center ml-10">
            <div id="zemamain" class="ml-4 cursor-pointer">
                <img class="w-20" src="imgs/icon/icon.png" alt="Main Icon">
            </div>
            <div class="ml-4">
                <p id="zname" class="text-2xl text-gray-500">Zema</p>
            </div>
        </div>
        <div class="flex gap-10 justify-between items-center mr-20">
            <a class="flex hover:text-maincolor" href="/home">
            <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                <p class="text-lg">Home</p>
            </a>
            <a class="flex hover:text-maincolor" href="/news">
            <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>    
            <p class="text-lg">News</p></a>
            <a class="flex hover:text-maincolor" href="/artist">
            <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>    
            <p class="text-lg">Artist</p></a>
            <a class="flex hover:text-maincolor" href="/about">
            <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>    
            <p class="text-lg">About</p></a>
            <div class="relative">
                <div id="accountt" class="flex cursor-pointer hover:text-maincolor">
                    <p>Account</p>
                <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </div>
                <div id="hiddenclass" class="absolute border border-gray-200 w-36  grid bg-white hidden">
                    <a class="px-3 py-4 border-b border-gray-500  hover:bg-gray-100" href="/login">Login</a>
                    <a class="px-3 py-4  hover:bg-gray-100" href="signup">SignUp</a>
                </div>
            </div>
            
            
            
        </div>
    </header>
    <main class="pt-20 relative z-10">
    
    </main>
</body>
</html>