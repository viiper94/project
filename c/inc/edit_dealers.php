<main>
	<form action="/c/dealers/edit" method="POST" class="form-horizontal col-md-10 col-md-offset-1">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label">Назва</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="title" placeholder="Назва" value="<?=$data['title']?>">
		    </div>
		</div>
		<div class="form-group">
			<label for="country" class="col-sm-2 control-label">Країна</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="country" placeholder="Країна" value="<?=$data['country']?>">
		    </div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-2 control-label">Місто</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="city" placeholder="Місто" value="<?=$data['city']?>">
		    </div>
		</div>
		<div class="form-group">
			<label for="address" class="col-sm-2 control-label">Адреса</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="address" placeholder="Адреса" value="<?=$data['address']?>">
		    </div>
		</div>
		<div class="form-group">
			<label for="ceo" class="col-sm-2 control-label">Директор</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="ceo" placeholder="Директор" value="<?=$data['ceo']?>">
		    </div>
		</div>
		<div class="form-group">
			<label for="tel" class="col-sm-2 control-label">Телефон</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="tel" placeholder="Телефон" value="<?=$data['tel']?>">
		    </div>
		</div>
		<div class="form-group">
			<label for="rating" class="col-sm-2 control-label">Рейтинг</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="rating" placeholder="Рейтинг" value="<?=$data['rating']?>">
		    </div>
		</div>
		<input type="hidden" name="id" value="<?=$data['dealers_id']?>">
		<input type="submit" name="edit" value="Зберегти" class="btn btn-primary col-md-offset-2">
		<input type="submit" name="delete" value="Видалити" class="btn btn-danger">
	</form>
</main>