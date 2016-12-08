$(document).ready(function(){

    // search handler
    $(document).on('keyup', '#search, #search-related', function(){
        //console.log(this)
        if($(this).val().length > 2){
            var query = $(this).val();
            var section = $(this).attr('data-section');
            var related = $(this).attr('id') == 'search-related' ? $(this).attr('data-id') : false;
            var searchBy = $('input[name=search-by]:checked').attr('value');
            sendAjax(query, section, related, searchBy);
        }
    });

    function sendAjax(query, section, related, searchBy){
        $.ajax({
            cache: false,
            dataType : 'json',
            url : '/admin/'+section+'/ajax',
            data : {
                'query' : query,
                'searchBy' : searchBy,
                'related' : related
            },
            success : function(response){
                var tmp, cols, className;
                if(related){
                    className = '.item-list';
                    $(className).html('');
                }else{
                    className = '.content';
                    $(className).html('');
                }
                if(response.status == 'OK'){
                    switch(section){
                        case 'news' :
                            tmp = 'news-template';
                            cols = {
                                'id' : 'news_id',
                                'title' : 'news_title',
                                'picture' : 'news_title_picture',
                                'info' : 'news_date'
                            };
                            break;
                        case 'releases' :
                            tmp = 'release-template';
                            cols = {
                                'id' : 'releases_id',
                                'title' : 'release_title',
                                'picture' : 'release_cover',
                                'info' : 'release_artist'
                            };
                            break;
                        case 'artists' :
                            tmp = 'artist-template';
                            cols = {
                                'id' : 'artist_id',
                                'title' : 'artist_name',
                                'picture' : 'artist_picture'
                            };
                            break;
                    }
                    render(response, tmp, cols, className);
                }else{
                    $(className).append('<h3>No result :(</h3>');
                }
            }
        });
    }
    
    function render(response, tmpId, cols, className){
        var template = _.template($('#'+tmpId).html());
        for(var i = 0; i < Object.keys(response.data).length; i++){
            var data = {
                id : response.data[i][cols.id],
                title : response.data[i][cols.title],
                picture : response.data[i][cols.picture],
                sort : response.data[i].sort
            };
            if(cols.info != undefined){
                data.info = response.data[i][cols.info];
            }
            if(response.related){
                data.checked = $.inArray(data.id.toString(), response.related) !== -1;                
            }
            //console.log(data);
            var toAppend = template(data);
            $(className).append(toAppend);
        }
    }

});