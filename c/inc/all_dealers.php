<main class="row container-fluid col-md-10 col-md-offset-1">
	<table class="table table-hover text-center">
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Назва</th>
			<th class="text-center">Країна</th>
			<th class="text-center">Місто</th>
			<th class="text-center">Адреса</th>
			<th class="text-center">Директор</th>
			<th class="text-center">Телефон</th>
			<th class="text-center">Рейтинг</th>
			<th class="text-center">Дія</th>
		</tr>
		<?php
		foreach($data as $row){
			echo '<tr>';
			foreach($row as $value){
				echo "<td>$value</td>";
			}
			echo '<td>
				<a class="btn btn-primary" href="/c/dealers/edit/'; echo $row['dealers_id']; echo '"><span class="glyphicon glyphicon-pencil"></span></a>
				<a class="btn btn-danger" href="/c/dealers/delete/'; echo $row['dealers_id']; echo '"><span class="glyphicon glyphicon-remove"></span></a>
			</td>';
			echo '</tr>';
		}
		?>
	</table>
	<a class="btn btn-default" href="/c/dealers/new"><span class="glyphicon glyphicon-plus"></span></a>
</main>