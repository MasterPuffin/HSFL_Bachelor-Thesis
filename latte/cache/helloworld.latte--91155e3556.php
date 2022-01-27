<?php

use Latte\Runtime as LR;

/** source: templates/helloworld.latte */
final class Template91155e3556 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<p>Hello World>';
		return get_defined_vars();
	}

}
