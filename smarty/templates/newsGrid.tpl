{extends "base.tpl"}
{block "main"}
    <h1>News</h1>
    <hr class="mt-2 mb-4">
    <div class="row">
        {foreach $news as $newsItem}
            {include "components/newsGridItem.tpl" newsItem=$newsItem}
        {/foreach}
    </div>
{/block}