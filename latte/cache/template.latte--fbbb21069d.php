<?php

use Latte\Runtime as LR;

/** source: templates/template.latte */
final class Templatefbbb21069d extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if ($items) /* line 1 */ {
			echo '<ul>
    ';
			$iterations = 0;
			foreach ($iterator = $ʟ_it = new LR\CachingIterator($items, $ʟ_it ?? null) as $item) /* line 2 */ {
				echo '
        <li id="item-';
				echo LR\Filters::escapeHtmlAttr($iterator->counter) /* line 3 */;
				echo '">';
				echo LR\Filters::escapeHtmlText(($this->filters->capitalize)($item)) /* line 3 */;
				echo '</li>
';
				$iterations++;
			}
			$iterator = $ʟ_it = $ʟ_it->getParent();
			echo '</ul>';
		}
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['item' => '2'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}
