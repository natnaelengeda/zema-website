import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// console.log('hello ther ');


$(function(){

var zmain = $('#zemamain');  // Main Zema Icon
var accountt = $('#accountt');
var hiddenc = $('#hiddenclass');

var artistpage = $('#toartist');
var artistsign = $('#artistsignup');
var artlog = $('#artlog');
var footer = $('#footer');


artistpage.on("click",function(e){
    console.log('clicked');
    window.location = "/toartist";
});
artistsign.on("click", function(e){
    console.log()
    window.location = "/artistsign";
})
artlog.on("click", function(e){
    window.location = "/artistlog";
})
    // $path = $(location).attr('pathname');
    // if($path == "/artupload" )
    // {
    //     footer.addClass('hidden');
    // }
  
    // $('#android').on('click',function(e){
    //     alert('clicked');
//    / });
// 








});