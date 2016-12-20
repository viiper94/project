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
    
    $(document).on('submit', '.subscribe-form', function(){
        event.preventDefault();
        var email = $('input[name=email]').val();
        var name = $('input[name=name]').val();
        $.ajax({
            cache: false,
            dataType : 'json',
            type : 'POST',
            url : '/about',
            data : {
                'ajax' : 'true',
                'email' : email,
                'name' : name
            },
            success : function(response){
                if(response.status == 'OK'){
                    alert('Успішно додано!');
                } else if(response.status == 'Already exist'){
                    alert('Така електронна адреса вже існує!');
                } else{
                    console.log(response.status);
                }
            }
        });
    });
    
});