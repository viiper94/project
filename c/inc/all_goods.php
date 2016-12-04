<main class="row container-fluid">
	<div class="col-md-3">
		<div class="new-product">
			<a href="/c/goods/new" class="btn btn-default col-md-10 col-md-offset-1">
				<span class="glyphicon glyphicon-plus"></span> Додати новий товар
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="categories">
			<h4 class="text-center">Категорії</h4>
			<ul>
				<?php
				foreach($data['cats'] as $key => $value){
					echo '<li><a href="/c/goods/category/'.$value['categories_id'].'">'.$value['title'].'</a></li>';
				}
				?>
			</ul>
		</div>
	</div>	
	<div class="goods col-md-9">
		<?php
		if(!empty($data['goods'])){
			foreach($data['goods'] as $key => $value){
				echo '<div class="product col-md-4">
					<h2 class="text-center"><span class="label label-success">' . $value['price'] . ' грн</span></h2>
					<a href="/c/goods/show/' . $value['goods_id'] . '" class="cover" style="background-image: url(/c/' . $value['picture'] . ');"></a>
					<div class="product-info">
						<a href="/c/goods/show/' . $value['goods_id'] . '"><h3 class="text-center">' . $value['title'] . '</h3></a>
					</div>
					<div class="btn-group-vertical buttons">
						<a href="/c/goods/edit/' . $value['goods_id'] . '" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="/c/goods/delete/' . $value['goods_id'] . '" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
				</div>';
			}	
		} else {
			echo '<div class="col-md-9"><h3>Тут поки що нічого немає...</h3></div>';
		}
		
		?>
	</div>
</main>