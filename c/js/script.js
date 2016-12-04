$(document).ready(function(){

	$('.edit-cat').on('click', function(){
		console.log($(this).parent().children().first());
		console.log($(this).parent().parent().children().first());
		var oldHtml = $(this).parent().parent().children().first().children().html();
		var newHtml = '<input type="text" name="new_cat" class="form-control" value="'+oldHtml+'">';
		$(this).parent().parent().children().first().html(newHtml);
		$(this).replaceWith('<button type="submit" name="title" class="btn btn-primary save-cat"><span class="glyphicon glyphicon-floppy-disk"></span></button>') 
	});

});