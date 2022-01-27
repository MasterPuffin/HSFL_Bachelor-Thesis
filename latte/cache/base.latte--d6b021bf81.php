<?php

use Latte\Runtime as LR;

/** source: templates/base.latte */
final class Templated6b021bf81 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['main' => 'blockMain'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($root["ressources"])) /* line 9 */;
		echo '/.assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($root["ressources"])) /* line 10 */;
		echo '/.assets/custom.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($root["web"])) /* line 18 */;
		echo '/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($root["ressources"])) /* line 19 */;
		echo '/.assets/images/HSFL_Icon.png" height="32px" alt="Logo">
            <span class="fs-4">Company</span>
        </a>
        <ul class="nav nav-pills">
';
		$iterations = 0;
		foreach ($nav as $navItem) /* line 23 */ {
			echo '                <li class="nav-item"><a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($root['web'])) /* line 24 */;
			echo '/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($navItem[1])) /* line 24 */;
			echo '/" class="nav-link">';
			echo LR\Filters::escapeHtmlText($navItem[0]) /* line 24 */;
			echo '</a></li>
';
			$iterations++;
		}
		echo '        </ul>
    </header>
    <main>
        ';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('main', get_defined_vars()) /* line 29 */;
		echo '
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">© 2021 Company, Inc</span>
        </div>
        <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($root["ressources"])) /* line 35 */;
		echo '/.assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </footer>
</div>
</body>
</html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['navItem' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}


	/** {block main} on line 29 */
	public function blockMain(array $ʟ_args): void
	{
		
	}

}
