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
    
    $(document).on('submit', '#contact-form', function(){
        event.preventDefault();
        var email = $('input[name=email]').val();
        var name = $('input[name=name]').val();
        var secondName = $('input[name=second-name]').val();
        var message = $('textarea').val();
        $.ajax({
            cache: false,
            dataType : 'json',
            type : 'POST',
            url : '/school',
            data : {
                'ajax' : 'true',
                'email' : email,
                'name' : name,
                'second-name' : secondName,
                'message' : message
            },
            success : function(response){
                if(response.status == 'OK'){
                    alert('Успішно відправлено!');
                } else{
                    alert(response.status);
                }
            }
        });
    });
    
    $(document).on('click', '.ajaxable', function(){
        event.preventDefault();
        var target = $(this).attr('data-target');
        var page = $(this).attr('data-page');
        var id = $(this).attr('data-id');
        var section = id == undefined ? target+'-list' : target;
        //console.log(this);
        $.ajax({
            cache: false,
            dataType : 'json',
            type : 'GET',
            url : '/'+target,
            data : {
                'ajax': 'true',
                'page' : page,
                'id' : id
            },
            success : function(response){
                if(response.status == 'OK'){
                    clearMain();
                    render(section, response);
                    if(response.pgn != undefined) pagination(target, response.pgn);
                }else{
                    alert(response.status);
                }
            }
        })
    });

    function clearMain(){
        $('main').html('');
    }

    function render(tmpl, data){
        var template = _.template($('#'+tmpl+'-template').html())(data);
        //console.log(data);
        $('main').append(template);
    }
    
    function pagination(controller, pages){
        //console.log(pages);
        var data = {
            'pgn' : pages,
            'controller' : controller
        };
        var html = _.template($('#pagination-template').html())(data);
        $('main').append(html);
    }
    
});