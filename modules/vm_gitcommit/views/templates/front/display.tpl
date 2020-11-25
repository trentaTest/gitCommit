{extends file='page.tpl'}  
 
{block name="page_content"}
    
    <div>
        <table>
        {foreach from=$gitCommits item=gitCommit}
            <li>
                {$gitCommit->commit->author->name} {*show author of commits*}
                {$gitCommit->commit->author->date}
            </li>
        {/foreach}
        {*$gitCommits|@var_dump*}
        </table>
    </div>
    <ul>
        <li>
            {l s='Number of products' d='Modules.Vm_GitCommit'}&nbsp;{$nb_product}
        </li>
        <li>
            Categories:
            <ul>
                {foreach from=$categories item=cat}
                    <li>{$cat['name']}</li>
                {/foreach}
            </ul>
        </li>
        <li>{$shop_name}</li>
    </ul>
{/block}
