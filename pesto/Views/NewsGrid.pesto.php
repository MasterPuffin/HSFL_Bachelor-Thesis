<?php
?>
#Components = [NewsGridItem]

#Extends = [Base]

#Block(main)
<h1>News</h1>
<hr class="mt-2 mb-4">
<div class="row">
	<?php
	foreach (\News::getAll() as $news) {
		?>
        <NewsGridItem @image="<?= $news->image ?>" @id="<?= $news->id ?>" @text="<?= $news->text ?>" @title="<?= $news->title ?>"></NewsGridItem>
		<?php
	}
	?>
</div>
#Endblock
