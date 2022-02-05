<?php
?>
#Components = [NewsGridItem]

#Extends = [Base]

#Block(main)
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?= RESOURCESROOT ?>/.assets/images/HSFL_Icon.png" alt=""
         height="100">
    <h1 class="display-5 fw-bold">Willkommen</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
            consequat massa quis enim.
        </p>
    </div>
</div>

<div class="px-4 pb-5 my-5 text-center">
    <h2 class="display-6 fw-bold mb-4">Letzte News</h2>
    <div class="row">
		<?php
		foreach (\News::getAll(4) as $news) {
			echo '<NewsGridItem @image="' . $news->image . '" @title="' . $news->title . '"  @id="' . $news->id . '" @text="' . $news->text . '"></NewsGridItem>';
		}
		?>
    </div>
</div>

<div class="px-4 pb-5 my-5 text-center">
    <h2 class="display-6 fw-bold mb-4">Lorem Ipsum</h2>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
            consequat massa quis enim.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="<?= WEBROOT ?>/contact/" class="btn btn-primary btn-lg px-4 gap-3">Kontakt</a>
        </div>
    </div>
</div>
#Endblock
