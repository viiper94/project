$(document).ready(function(){

    // making navbar floating
    var navbarPos = $('.navbar').offset();
    scrollNavbar();

    window.onscroll = function(){
        scrollNavbar();
    }

    function scrollNavbar(){
        if(window.pageYOffset >= navbarPos.top){
            $('.navbar').removeClass('bottom');
            $('.navbar').addClass('sticked');
        }else{
            $('.navbar').removeClass('sticked');
            $('.navbar').addClass('bottom');
        }
    }
    
});