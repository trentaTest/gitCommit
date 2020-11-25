{extends file='page.tpl'}  
 
{block name="page_content"}
    
    <ul>
        {*$gitCommits|@var_dump*}        
        {foreach from=$gitCommits item=gitCommit}
            <li>
                {$gitCommit->commit->author->name} {*show author of commits*}
                {$gitCommit->commit->author->date}
            </li>
        {/foreach}
    </ul>
    <ul>
        <li>
            {l s='Number of products' d='Modules.Vm_GitCommit'}&nbsp;{$nb_product}
        </li>
    </ul>
    <ul>
        <li>
            Categories:
            <ul>
                {foreach from=$categories item=cat}
                    <li>{$cat['name']}</li>
                {/foreach}
                <li>{$shop_name}</li>
            </ul>
        </li>
    </ul>
{/block}
