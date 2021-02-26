{if $role=="user" || $role=="root" }
  {$name = 'main_user_login.tpl'}
{else}
  {$name = 'main.tpl'}
{/if}
 {extends $name}


{block name=content}



<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Dziękujemy</h2>
            </header>
            <h3> Dziękujemy za złożenie rezerwacji. Powróć na stronę główną </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="{$conf->action_root}show_front_page" class="button primary">Strona główna</a>       
            </div>

                        
                        
        </div>
</div>
{/block}