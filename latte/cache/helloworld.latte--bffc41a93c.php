<?php

use Latte\Runtime as LR;

/** source: templates/helloworld.latte */
final class Templatebffc41a93c extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<p>Hello World</p>';
		return get_defined_vars();
	}

}
