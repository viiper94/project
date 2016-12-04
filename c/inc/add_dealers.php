<main>
	<form action="/c/dealers/new" method="POST" class="form-horizontal col-md-10 col-md-offset-1">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Назва</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name" placeholder="Назва" required>
		    </div>
		</div>
		<div class="form-group">
			<label for="country" class="col-sm-2 control-label">Країна</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="country" placeholder="Країна">
		    </div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-2 control-label">Місто</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="city" placeholder="Місто">
		    </div>
		</div>
		<div class="form-group">
			<label for="address" class="col-sm-2 control-label">Адреса</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="address" placeholder="Адреса">
		    </div>
		</div>
		<div class="form-group">
			<label for="ceo" class="col-sm-2 control-label">Директор</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="ceo" placeholder="Директор">
		    </div>
		</div>
		<div class="form-group">
			<label for="tel" class="col-sm-2 control-label">Телефон</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="tel" placeholder="Телефон">
		    </div>
		</div>
		<div class="form-group">
			<label for="rating" class="col-sm-2 control-label">Рейтинг</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="rating" placeholder="Рейтинг">
		    </div>
		</div>
		<input type="submit" name="add_new" id="add_new" value="Додати постачальника" class="btn btn-primary col-md-offset-2">
	</form>
</main>