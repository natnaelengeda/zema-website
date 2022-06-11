require('./bootstrap');
$(function(){
    
var zmain = $('#zemamain');  // Main Zema Icon
var accountt = $('#accountt');
var hiddenc = $('#hiddenclass');

zmain.on("click",function(e){
    window.location = "/";
}); 
accountt.on("click",function(e){
    hiddenc.toggleClass("hidden");
    


        
    var input = document.querySelector('#phone');

    window.intlTelInput(input,({

    // options here

    }));


    $('.iti__flag-container').click(function() {

        var countryCode = $('.iti__selected-flag').attr('title');
        
        var countryCode = countryCode.replace(/[⁰-9]/g,'')
        
        $('#phone').val("");
        
        $("#phone").val("+"+countryCode+" "+ $('#phone').val());
        
        });







});




















});