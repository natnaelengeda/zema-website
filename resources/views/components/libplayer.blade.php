<section class=>
    <div class="music-container border border-gray-200 shadow-2xl z-40 bg-white flex h-28 fixed bottom-0 rounded-xl overflow-hidden right-0 w-full md:w-auto" id="music-container">
        <div class="music-info">
          <h4 id="title" class="text-black"></h4>
          <div class="progress-container" id="progress-container">
            <div class="progress" id="progress"></div>
          </div>
        </div>
  
        <audio src="music/ukulele.mp3" id="audio"></audio>
  
        <div class="img-container border border-maincolor">
          <img class="w-28" src="images/ukulele.jpg" alt="music-cover" id="cover" />
        </div>
        {{-- Play Next Pause --}}
        <div class="navigation">
          <button id="prev" class="action-btn border ">
            <i class="fas fa-backward"></i>
          </button>
          <button id="play" class="action-btn action-btn-big">
            <i class="fas fa-play"></i>
          </button>
          <button id="next" class="action-btn">
            <i class="fas fa-forward"></i>
          </button>
        </div>
        {{-- End Play Next Pause --}}
    </div>
</section>
<script src="js/Jquery3.js"></script>
<script>
    const musicContainer = document.getElementById('music-container');
    const playBtn = document.getElementById('play');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');

    const audio = document.getElementById('audio');
    const progress = document.getElementById('progress');
    const progressContainer = document.getElementById('progress-container');
    const title = document.getElementById('title');
    const cover = document.getElementById('cover');
    const currTime = document.querySelector('#currTime');
    const durTime = document.querySelector('#durTime');
    $(function(){
      var musc =[];
  
      $.ajax({
      type: "GET",
      url: "/playmusic",
      // data: "data",
      dataType: "json",
      success: function (data) {
        
        for(var i=0; i < data.length; i++){
          musc.push(data[i].music_file);
        }
        

      }
    });
    var sideclick = $('.sidebuttonclicked');
    var trackclicked = $('.trackclicked');
    var mainpageplay = $('.mainpageplay');
    var listclicked = $('.listclicked');
    var libclicked = $('.libclicked');

    sideclick.on('click',function(e){
        // console.log();
        
        loadSong($(this).attr('value'));
        playSong();

      

    });
    trackclicked.on('click',function(e){

        loadSong($(this).attr('value'));
        playSong();
    });
    mainpageplay.on('click',function(e){

        loadSong($(this).attr('value'));
        playSong(); 
    });
    listclicked.on('click',function(e){
        console.log('clicked');
    loadSong($(this).attr('value'));
    playSong(); 
    });
    libclicked.on('click',function(e){
        console.log('clicked');
    loadSong($(this).attr('value'));
    playSong(); 
    });


  
    // Song titles
    const songs = ['hey', 'summer', 'ukulele'];
    // console.log(song.type);
    // Keep track of song
    let songIndex = 2;
    // var mname = "1655366709-.mp3";
    // Initially load song details into DOM
    loadSong(mname);
    // audio.play();
    // Update song details
    function loadSong(song) {
      title.innerText = song;
      audio.src = `imgs/uploads/art-music-file/${song}`;
      cover.src = `imgs/uploads/art-music-pic/${song.split(".")[0]}.jpg`;
      console.log(cover.src);
    }

    // Play song
    function playSong() {
      musicContainer.classList.add('play');
      playBtn.querySelector('i.fas').classList.remove('fa-play');
      playBtn.querySelector('i.fas').classList.add('fa-pause');

      audio.play();
    }

    // Pause song
    function pauseSong() {
      musicContainer.classList.remove('play');
      playBtn.querySelector('i.fas').classList.add('fa-play');
      playBtn.querySelector('i.fas').classList.remove('fa-pause');

      audio.pause();
    }

    // Previous song
    function prevSong() {
      songIndex--;

      if (songIndex < 0) {
        songIndex = songs.length - 1;
      }

      loadSong(songs[songIndex]);

      playSong();
    }

    // Next song
    function nextSong() {
      songIndex++;

      if (songIndex > songs.length - 1) {
        songIndex = 0;
      }

      loadSong(songs[songIndex]);

      playSong();
    }

    // Update progress bar
    function updateProgress(e) {
      const { duration, currentTime } = e.srcElement;
      const progressPercent = (currentTime / duration) * 100;
      progress.style.width = `${progressPercent}%`;
    }

    // Set progress bar
    function setProgress(e) {
      const width = this.clientWidth;
      const clickX = e.offsetX;
      const duration = audio.duration;

      audio.currentTime = (clickX / width) * duration;
    }

    //get duration & currentTime for Time of song
    function DurTime (e) {
      const {duration,currentTime} = e.srcElement;
      var sec;
      var sec_d;

      // define minutes currentTime
      let min = (currentTime==null)? 0:
      Math.floor(currentTime/60);
      min = min <10 ? '0'+min:min;

      // define seconds currentTime
      function get_sec (x) {
        if(Math.floor(x) >= 60){
          
          for (var i = 1; i<=60; i++){
            if(Math.floor(x)>=(60*i) && Math.floor(x)<(60*(i+1))) {
              sec = Math.floor(x) - (60*i);
              sec = sec <10 ? '0'+sec:sec;
            }
          }
        }else{
          sec = Math.floor(x);
          sec = sec <10 ? '0'+sec:sec;
        }
      } 

      get_sec (currentTime,sec);

      // change currentTime DOM
      currTime.innerHTML = min +':'+ sec;

      // define minutes duration
      let min_d = (isNaN(duration) === true)? '0':
        Math.floor(duration/60);
      min_d = min_d <10 ? '0'+min_d:min_d;


      function get_sec_d (x) {
        if(Math.floor(x) >= 60){
          
          for (var i = 1; i<=60; i++){
            if(Math.floor(x)>=(60*i) && Math.floor(x)<(60*(i+1))) {
              sec_d = Math.floor(x) - (60*i);
              sec_d = sec_d <10 ? '0'+sec_d:sec_d;
            }
          }
        }else{
          sec_d = (isNaN(duration) === true)? '0':
          Math.floor(x);
          sec_d = sec_d <10 ? '0'+sec_d:sec_d;
        }
      } 

      // define seconds duration
      
      get_sec_d (duration);

      // change duration DOM
      durTime.innerHTML = min_d +':'+ sec_d;
        
    };

    // Event listeners
    playBtn.addEventListener('click', () => {
      const isPlaying = musicContainer.classList.contains('play');

      if (isPlaying) {
        pauseSong();
      } else {
        playSong();
      }
    });

    // Change song
    prevBtn.addEventListener('click', prevSong);
    nextBtn.addEventListener('click', nextSong);

    // Time/song update
    audio.addEventListener('timeupdate', updateProgress);

    // Click on progress bar
    progressContainer.addEventListener('click', setProgress);

    // Song ends
    audio.addEventListener('ended', nextSong);

    // Time of song
    audio.addEventListener('timeupdate',DurTime);
  });
</script>