<?php
?>
#Components = [NewsGridItem]

#Extends = [Base]

#Block(main)
<?php
$request=getRequestArr();
$user = new \User($request[1]);
$userNews =\News::getForUser($request[1])
?>
<h1>{{ $user->name }}</h1>
<hr class="mt-2 mb-4">
<div class="row">
    <div class="col-6">
        <h4>{{ $user->department }}</h4>
        <p>Abteilung</p>
        <h4>{{ $user->phone }}</h4>
        <p>Telefon</p>
        <h4>{{ $user->email }}</h4>
        <p>E-Mail</p>
    </div>
    <div class="col-6">
        <img class="img-fluid rounded mx-auto d-block mb-4" alt="image"
             src="{{ $user->image }}">
    </div>
    <hr class="mt-2 mb-4">
    <h3 class="mb-4">Letzte News</h3>
	<?php
	foreach ($userNews as $news) {
		echo '<NewsGridItem @image="' . $news->image . '" @title="' . $news->title . '"  @id="' . $news->id . '" @text="' . $news->text . '"></NewsGridItem>';
	}
	?>
</div>
#Endblock
