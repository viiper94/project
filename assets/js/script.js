$(document).ready(function(){

    // making navbar floating
    var navbarPos = $('.navbar').offset();
    window.onscroll = function(){
        if(window.pageYOffset >= navbarPos.top){
            $('.navbar').removeClass('bottom');
            $('.navbar').addClass('sticked');
        }else{
            $('.navbar').removeClass('sticked');
            $('.navbar').addClass('bottom');
        }
    }
    
});