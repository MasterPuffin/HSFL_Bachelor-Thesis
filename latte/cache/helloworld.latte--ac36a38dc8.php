<?php

use Latte\Runtime as LR;

/** source: templates/helloworld.latte */
final class Templateac36a38dc8 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<p>Hello World</p>';
		return get_defined_vars();
	}

}
