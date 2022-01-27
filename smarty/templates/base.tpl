<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{constant('RESOURCESROOT')}/.assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{constant('RESOURCESROOT')}/.assets/custom.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{constant('WEBROOT')}/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="{constant('RESOURCESROOT')}/.assets/images/HSFL_Icon.png" height="32px" alt="Logo">
            <span class="fs-4">Company</span>
        </a>
        <ul class="nav nav-pills">
            {foreach $nav as $navItem}
            <li class="nav-item"><a href="{constant('WEBROOT')}/{$navItem[1]}/" class="nav-link">{$navItem[0]}</a></li>
            {/foreach}
        </ul>
    </header>
    <main>
        {block "main"}{/block}
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">© 2021 Company, Inc</span>
        </div>
        <script src="{constant('RESOURCESROOT')}/.assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </footer>
</div>
</body>
</html>