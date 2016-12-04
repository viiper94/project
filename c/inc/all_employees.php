<main class="row container-fluid col-md-10 col-md-offset-1">
	<table class="table table-hover text-center">
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Ім'я</th>			
			<th class="text-center">Призвіще</th>
			<th class="text-center">Місто</th>
			<th class="text-center">Адреса</th>
			<th class="text-center">Телефон</th>
			<th class="text-center">Магазин</th>
			<th class="text-center">Посада</th>
			<th class="text-center">Зарплата</th>
			<th class="text-center">Дія</th>
		</tr>		
		<?php
		foreach($data as $row){
			echo '<tr>';
			foreach($row as $value){
				echo "<td>$value</td>";
			}
			echo '<td>
				<a class="btn btn-primary" href="/c/employees/edit/'; echo $row['employees_id']; echo '"><span class="glyphicon glyphicon-pencil"></span></a>
				<a class="btn btn-danger" href="/c/employees/delete/'; echo $row['employees_id']; echo '"><span class="glyphicon glyphicon-remove"></span></a>
			</td>';
			echo '</tr>';
		}
		?>
	</table>
	<a class="btn btn-default" href="/c/employees/new"><span class="glyphicon glyphicon-plus"></span></a>
</main>