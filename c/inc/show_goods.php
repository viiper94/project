<main>
	<div class="col-md-8 col-md-offset-2 row">
		<h1 class="text-center"><?=$data['title']?></h1>
		<div class="col-md-4 cover" style="background-image: url(/c/<?=$data['picture']?>);"></div>
		<div class="col-md-8 info">
			<div class="row"><label class="col-md-3">Категорія</label><span class="col-md-9"><?=$data['cat_title']?></span></div>
			<div class="row"><label class="col-md-3">Підкатегорія</label><span class="col-md-9"><?=$data['subcategory']?></span></div>
			<div class="row"><label class="col-md-3">Код товару</label><span class="col-md-9"><?=$data['code']?></span></div>
			<div class="row"><label class="col-md-3">Ціна</label><span class="col-md-9"><b><?=$data['price']?> грн</b></span></div>
			<div class="row"><label class="col-md-3">Характеристики</label>
				<span class="col-md-9"><?=$data['techs']?></span>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="big-block">
			<h4>Опис товару</h4>
			<span><?=$data['description']?></span>
		</div>
	</div>
</main>