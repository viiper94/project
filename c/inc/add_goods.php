<main>
	<form action="/c/goods/new" method="POST" class="form-horizontal" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-5">
				<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
				<input type="file" accept="image/jpeg, image/png" name="cover" style="margin: 0 auto;">
			</div>			
			<div class="col-lg-6 main-info">
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Назва</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="title" placeholder="Назва" required>
				    </div>
				</div>
				<div class="form-group">
					<label for="price" class="col-sm-2 control-label">Ціна</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" name="price" placeholder="Ціна" required>
				    </div>
				</div>
				<div class="form-group">
					<label for="price" class="col-sm-2 control-label">Категорія</label>
				    <div class="col-sm-10">
				      	<select name="categories_id" class="form-control" required>
							<option value="" selected>Оберіть категорію</option>
							<?php
							foreach($data as $key => $value){
								echo '<option value="'.$value['categories_id'].'">'.$value['title'].'</option>';
							}
							?>
						</select>
				    </div>
				</div>
				<div class="form-group">
					<label for="subcat" class="col-sm-2 control-label">Підкатегорія</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="subcat" placeholder="Підкатегорія">
				    </div>
				</div>
				<div class="form-group">
					<label for="code" class="col-sm-2 control-label">Код товару</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" name="code" placeholder="Код товару" required>
				    </div>
				</div>
			</div>
		</div>
		<div class="edit-bottom">
			<div class="form-group">
				<label for="description" class="control-label">Опис товару</label>
			    <textarea name="description" name="description" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="techs" class="control-label">Характеристики</label>
			    <textarea name="techs" name="techs" class="form-control"></textarea>
			</div>
			<input type="submit" value="Зберегти" name="add_goods" class="btn btn-primary">
		</div>
	</form>
</main>