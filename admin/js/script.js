$(document).ready(function(){

    // search handler
    $('#search').keyup(function(){
        if($(this).val().length > 2){
            var query = $(this).val();
            var section = $(this).attr('data-section');
            sendAjax(query, section);
        }
    });

    function sendAjax(query, section){
        $.ajax({
            cache: false,
            dataType : 'json',
            url : '/admin/'+section+'/ajax',
            data : {
                'query' : query
            },
            success : function(response){
                $('.content').html('');
                if(response.status == 'OK'){
                    var tmp, cols;
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
                    insert(response, tmp, cols);
                }else{
                    $('.content').append('<h3>No result :(</h3>')
                }
            }
        });
    }
    
    function insert(response, tmpId, cols){
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
            //console.log(data);
            var toAppend = template(data);
            $('.content').append(toAppend);
        }
    }

});