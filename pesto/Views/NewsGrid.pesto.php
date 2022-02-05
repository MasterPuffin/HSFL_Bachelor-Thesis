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
		echo '<NewsGridItem @image="' . $news->image . '" @title="' . $news->title . '"  @id="' . $news->id . '" @text="' . $news->text . '"></NewsGridItem>';
	}
	?>
</div>
#Endblock
