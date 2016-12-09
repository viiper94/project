$(document).ready(function(){

    // search handler
    $(document).on('keyup', '#search, #search-related', function(){
        var ajax = {};
        ajax.related = $(this).attr('id') == 'search-related' ? $(this).attr('data-id') : false;
        ajax.section = $(this).attr('data-section');
        if($(this).val().length > 2){
            ajax.query = $(this).val();
            ajax.searchBy = $('input[name=search-by]:checked').attr('value');
            sendAjax(ajax);
        }
        if($(this).val().length == 0 && !ajax.related){
            ajax.query = '';
            sendAjax(ajax);
        }
    });

    function sendAjax(ajax){
        $.ajax({
            cache: false,
            dataType : 'json',
            url : '/admin/'+ajax.section+'/ajax',
            data : {
                'query' : ajax.query,
                'searchBy' : ajax.searchBy,
                'related' : ajax.related
            },
            success : function(response){
                var data = {};
                data.related = false;
                if(data.related){
                    data.related = true;
                    if($('.checked-list .checkbox').length > 0){
                        removeUnchecked();
                    }
                    if($('.item-list .checkbox').length > 0){
                        saveChecked();
                    }
                    data.className = '.item-list';
                }else{
                    data.className = '.content';
                }
                $(data.className).html('');
                if(response.status == 'OK'){
                    switch(ajax.section){
                        case 'news' :
                            data.tmpId = 'news-template';
                            data.cols = {
                                'id' : 'news_id',
                                'title' : 'news_title',
                                'picture' : 'news_title_picture',
                                'info' : 'news_date'
                            };
                            break;
                        case 'releases' :
                            data.tmpId = 'release-template';
                            data.cols = {
                                'id' : 'releases_id',
                                'title' : 'release_title',
                                'picture' : 'release_cover',
                                'info' : 'release_artist'
                            };
                            break;
                        case 'artists' :
                            data.tmpId = 'artist-template';
                            data.cols = {
                                'id' : 'artist_id',
                                'title' : 'artist_name',
                                'picture' : 'artist_picture'
                            };
                            break;
                    }
                    render(response, data);
                }else{
                    $(data.className).append('<h3>No result :(</h3>');
                }
            }
        });
    }

    function render(response, info){
        var template = _.template($('#'+info.tmpId).html());
        for(var i = 0; i < Object.keys(response.data).length; i++){
            var data = {
                id : response.data[i][info.cols.id],
                title : response.data[i][info.cols.title],
                picture : response.data[i][info.cols.picture],
                sort : response.data[i].sort
            };
            if(info.cols.info != undefined){
                data.info = response.data[i][info.cols.info];
            }
            if(response.related){
                data.checked = $.inArray(data.id.toString(), response.related) !== -1;
            }
            var toAppend = template(data);
            var exist = false;
            if(info.related){
                var checkedList = $('.checked-list .checkbox');
                if(checkedList != undefined){
                    for(var j = 0; j < checkedList.length; j++){
                        if(checkedList[j].children[0].innerText == data.title){
                            exist = true;
                            break;
                        }
                    }
                }
            }
            if(!exist) $(info.className).append(toAppend);
        }
    }

    function removeUnchecked(){
        var checkedList = $('.checked-list .checkbox');
        for(var j = 0; j < checkedList.length; j++){
            var checkbox = checkedList[j];
            if(!checkbox.children[0].children[0].checked){
                checkbox.remove();
            }
        }
    }

    function saveChecked(){
        var divObj = $('.item-list .checkbox');
        for(var j = 0; j < divObj.length; j++){
            var checkbox = divObj[j];
            if(checkbox.children[0].children[0].checked){
                // check if already saved
                var exist = false;
                var checkedList = $('.checked-list .checkbox');
                if(checkedList != undefined){
                    for(var i = 0; i < checkedList.length; i++){
                        if(checkedList[i].children[0].innerText == checkbox.children[0].innerText){
                            exist = true;
                            break;
                        }
                    }
                }
                if(!exist){
                    $('.checked-list').append(checkbox);
                }
            }
        }
    }

});