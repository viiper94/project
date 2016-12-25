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

    // if back/forward buttons pressed
    window.addEventListener("popstate", function(e) {
        ajaxRequest(e.state, false);
        navBarActive(e.state);
    }, false);
    
    $(document).on('click', '.ajaxable', function(){
        event.preventDefault();
        var parameters = {
            'target' : $(this).attr('data-target'),                                                         // get target controller
            'page' : $(this).attr('data-page'),                                                             // get page
            'id' : $(this).attr('data-id')                                                                  // get id
        };
        parameters.link = $(this).attr('href');
        parameters.section = parameters.id == undefined ? parameters.target+'-list' : parameters.target;    // generate html template name
        // if clicked href has hash
        if($(this).attr('href').indexOf('#') != -1){
            var href = $(this).attr('href');
            parameters.hash = href.substring(href.indexOf('#'));                                            // get anchor in school page
            // console.log(hash);
        }
        ajaxRequest(parameters, true);
        navBarActive(parameters);

    });

    function navBarActive(parameters){
        // console.log($('.nav>li'));
        $('.nav>li').removeClass('active');
        for(var i = 0; i < $('.nav>li').length; i++){
            var li = $('.nav>li')[i];
            if(li.children[0].attributes[2].value === parameters.target){
                $(li).addClass('active');
                break;
            }
        }
    }

    $('#search-form').submit(function(){
        event.preventDefault();
        var data = {
            'target' : 'search',
            'section' : 'search',
            'query' : $('#search-form input').val()
        };
        data.link = '/search/?q='+data.query;
        // console.log(query);
        ajaxRequest(data, true);
        $('.nav>li').removeClass('active');
        // $('#search-form input').val('');
    });

    function ajaxRequest(data, setHistory){
        $.ajax({
            cache: false,
            dataType : 'json',
            type : 'GET',
            url : '/'+data.target,
            data : {
                'ajax': 'true',
                'page' : data.page,
                'id' : data.id,
                'q' : data.query
            },
            success : function(response){
                if(response.status == 'OK'){
                    if(setHistory){                                             // if 'setHistory' flag is set
                        history.pushState(data, null, data.link);               // push new state to history with data object
                    }
                    clearMain();
                    setNewTitle(response.title);
                    if(response.item == undefined){
                        $('header').css('background-image', 'url(/assets/img/header1.jpg)')
                    }else if(response.item.news_title_picture != undefined){
                        $('header').css('background-image', 'url(/images/news/'+response.item.news_title_picture+')');
                    }
                    if(data.section === 'search') renderSearch(response);
                    else renderTemplate(data.section, response);
                    if(response.pgn != undefined) pagination(data.target, response.pgn);
                    if(data.hash != undefined){
                        $('html, body').animate({
                            scrollTop: $(data.hash).offset().top
                        }, 800);
                    }
                }else{
                    alert(response.status);
                }
            }
        });
    }

    function clearMain(){
        $('main').html('');
    }
    
    function setNewTitle(title){
        $('title').html(title);
    }

    function renderTemplate(tmpl, data){
        // console.log(data);
        var template = _.template($('#'+tmpl+'-template').html())(data);
        $('main').append(template);
    }

    function renderSearch(data){
        var item = {'releases' : []};
        $.each(data.releases.title, function(index, value){
            item.releases[index] = value;
        });
        $.each(data.releases.artist, function(index, value){
            item.releases[index] = value;
        });
        console.log(item);
        var templates = {};
        templates.newsTemplate = data.news != false 
            ? _.template($('#news-list-template').html())(data) 
            : undefined;
        templates.releasesTemplate = $(item.artists).length > 0 || $(item.title).length > 0
            ? _.template($('#releases-list-template').html())(item)
            : undefined;
        templates.artistsTemplate = data.artists != false 
            ? _.template($('#artists-list-template').html())(data) 
            : undefined;
        var searchTemplate = _.template($('#search-template').html())(templates);
        $('main').append(searchTemplate);
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

    $(document).on('click', '.sharers a', function(){
        var social = $(this).attr('id');
        var title = $('title').html();
        var description = $('.description span').html();
        switch (social) {
            case 'fb' :
                var url = 'https://www.facebook.com/sharer.php?u='+window.location.href+'&description='+description;
                break;
            case 'twitter' :
                url = 'http://twitter.com/intent/tweet?text=@DAMAGE_RECORDS+'+title+'&url='+window.location.href+'&hashtags=DAMAGE';
                break;
            case 'vk' :
                url = 'http://vk.com/share.php?description='+description+'&url='+window.location.href;
                break;
            case 'mail' :
                url = 'mailto:?Subject='+title+'&body='+window.location.href;
                break;
        }
        window.open(url,'share-dialog',"resizable=0,width=626,height=436,scrollbars=yes");
    });
    
});