<main class="row container-fluid col-md-8 col-md-offset-2">		
		<?php		
		foreach($data as $key => $value){



			echo '<form class="form-group row" action="/c/categories/edit/';echo $value['categories_id'];echo '" method="POST">
					<div class="col-md-10 text-center"><b>';echo $value['title'];echo '</b></div>
					<div class="col-md-2 text-center">
						<a class="btn btn-primary edit-cat">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
						<a class="btn btn-danger" href="/c/categories/delete/';echo $value['categories_id'];echo '">
							<span class="glyphicon glyphicon-remove"></span>
						</a>
					</div>
				</form>';
		}
		?>
			
					<form class="form-group row" action="/c/categories/new" method="POST">
						<div class="col-md-10 text-center">
							<input type="text" name="new_category" class="form-control" required placeholder="Нова категорія">					
						</div>
						<div class="col-md-2 text-center">
							<button type="submit" class="btn btn-succes" name="add_category">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</div>
					</form>
</main>