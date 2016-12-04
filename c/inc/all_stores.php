<main class="row container-fluid col-md-10 col-md-offset-1">
	<table class="table table-hover text-center">
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Місто</th>
			<th class="text-center">Адреса</th>
			<th class="text-center">Директор</th>
			<th class="text-center">Телефон</th>
			<th class="text-center">К-ть вакансій</th>
			<th class="text-center">Дія</th>
		</tr>
		<?php
		foreach($data as $row){
			echo '<tr>';
			foreach($row as $value){
				echo "<td>$value</td>";
			}
			echo '<td>
				<a class="btn btn-primary" href="/c/stores/edit/'; echo $row['stores_id']; echo '"><span class="glyphicon glyphicon-pencil"></span></a>
				<a class="btn btn-danger" href="/c/stores/delete/'; echo $row['stores_id']; echo '"><span class="glyphicon glyphicon-remove"></span></a>
			</td>';
			echo '</tr>';
		}
		?>
	</table>
	<a href="/c/stores/new" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
</main>