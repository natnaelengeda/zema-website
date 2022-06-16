
    <aside class="w-64  h-screen fixed border-r " aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-gray-100 rounded :bg-gray-800">
            <center>
                <div class="rounded-full w-32">
                    <img class="rounded-full" src="imgs/albumart/reflection.png" alt="Profile Pics">
                </div>
            </center>
            <div class="w-full flex justify-start gap-2 px-2 my-3">
                <p>{{ $info['fname'] }}</p>
                <p>{{ $info['lname'] }}</p>  
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['uname'] }}</p>
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['email']}}</p>
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['phonenumber']}}</p>
            </div>
            <hr class="border border-gray-300">
            <div class="w-full px-2 my-3">
                <p>{{ $info['uploadmusic']}}</p>
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['uploadalbum']}}</p>
            </div>




        </div>
    </aside>
