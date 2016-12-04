<main>
	<form action="/c/employees/new" method="POST" class="form-horizontal col-md-10 col-md-offset-1">
		<div class="form-group">
			<label for="first-name" class="col-sm-2 control-label">Ім'я</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="first_name" id="first-name" placeholder="Ім'я" required>
		    </div>
		</div>
		<div class="form-group">
			<label for="second-name" class="col-sm-2 control-label">Прізвище</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="second_name" id="second-name" placeholder="Прізвище" required>
		    </div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-2 control-label">Місто</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="city" id="city" placeholder="Місто" required>
		    </div>
		</div>
		<div class="form-group">
			<label for="address" class="col-sm-2 control-label">Адреса</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="address" id="address" placeholder="Адреса">
		    </div>
		</div>
		<div class="form-group">
			<label for="tel" class="col-sm-2 control-label">Телефон</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="tel" id="tel" placeholder="Телефон">
		    </div>
		</div>
		<div class="form-group">
			<label for="stores_id" class="col-sm-2 control-label">Магазин</label>
		    <div class="col-sm-10">
		    	<select class="form-control" name="stores_id" required>
					<option value="">Оберіть магазин</option>
					<?php
					foreach($data as $value){
						echo '<option value="'.$value['stores_id'].'">'.$value['city'].' - '.$value['address'].'</option>';
					}
					?>
				</select>
		    </div>
		</div>
		<div class="form-group">
			<label for="position" class="col-sm-2 control-label">Посада</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="position" id="position" placeholder="Посада" required>
		    </div>
		</div>
		<div class="form-group">
			<label for="salary" class="col-sm-2 control-label">Зарплата</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="salary" id="salary" placeholder="Зарплата">
		    </div>
		</div>
		<input type="submit" name="add_new" id="add_new" value="Додати працівника" class="btn btn-primary col-md-offset-2">
	</form>
</main>