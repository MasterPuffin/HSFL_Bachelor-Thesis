<?php
?>
#Extends = [Base]

#Block(main)
<?php
$departments = \User::orderByDepartments(\User::getAll());
?>
<h1>Mitarbeiter</h1>
<hr class="mt-2 mb-4">
<?php
foreach ($departments as $department) {
	?>
    <h2>{{ $department->name }}</h2>
    <hr class="mt-2 mb-4">
    <div class="row">
        <?php
        foreach ($department->users as $user) {
            ?>
            <div class="col-md-3 mb-4">
                <div class="card ">
                    <img src="{{ resolveImage($user->image) }}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">
                            {{ $user->phone }}
                            <br>
                            {{ $user->email }}
                        </p>
                        <a href="<?= WEBROOT ?>/users/{{ $user->id }}/"
                           class="btn btn-primary stretched-link">
                            Mehr lesen
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
	<?php
}
?>

#Endblock
