<main>
	<form action="/c/goods/edit" method="POST" class="form-horizontal">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-lg-5">
				<div class="cover" style="background-image: url(/c/<?=$data['data']['picture']?>);"></div>
				<input type="file" name="cover" style="margin: 0 auto;">
			</div>			
			<div class="col-lg-7 main-info">
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Назва</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="title" placeholder="Назва" value="<?=$data['data']['title']?>" required>
				    </div>
				</div>
				<div class="form-group">
					<label for="price" class="col-sm-2 control-label">Ціна</label>
				    <div class="col-sm-10">
				      	<input type="number" class="form-control" name="price" placeholder="Ціна" value="<?=$data['data']['price']?>" required>
				    </div>
				</div>
				<div class="form-group">
					<label for="price" class="col-sm-2 control-label">Категорія</label>
				    <div class="col-sm-10">
				      <select class="form-control" name="categories_id" required>
							<?php
							foreach($data['cats'] as $key => $value){
								echo '<option value="'.$value['categories_id'].'"';
								if($data['data']['categories_id'] == $value['categories_id']) echo ' selected';
								echo '>'.$value['title'].'</option>';
							}
							?>
						</select>
				    </div>
				</div>
				<div class="form-group">
					<label for="subcat" class="col-sm-2 control-label">Підкатегорія</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="subcategory" placeholder="Підкатегорія" value="<?=$data['data']['subcategory']?>">
				    </div>
				</div>
				<div class="form-group">
					<label for="code" class="col-sm-2 control-label">Код товару</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" name="code" placeholder="Код товару" value="<?=$data['data']['code']?>" required>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				<label for="description" class="control-label">Опис товару</label>
			    <textarea name="description" class="form-control"><?=$data['data']['description']?></textarea>
			</div>
			<div class="form-group">
				<label for="techs" class="control-label">Характеристики</label>
			    <textarea name="techs" class="form-control"><?=$data['data']['techs']?></textarea>
			</div>
			<input type="hidden" name="id" value="<?=$data['data']['goods_id']?>">
			<input type="submit" value="Зберегти" name="edit_goods" class="btn btn-primary">
			<input type="submit" value="Видалити" name="delete_goods" class="btn btn-danger">
		</div>
	</form>
</main>