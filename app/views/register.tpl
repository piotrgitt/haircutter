{if $role=="user" }
  {$name = 'main_user_login.tpl'}
{else if $role=="root"}
  {$name = 'main_admin_login.tpl'}
{else}
   {$name = 'main.tpl'} 
{/if}
 {extends $name}



{block name=content}



<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Rejestracja</h2>
                </header>  
        <header class="minor">
                        <h3>Zarejestruj się aby zarezerwować wizytę on-line!</h3>
                </header>  
            

        <!-- Register form -->       
        
        
        <section>
                <form method="post" action="{$conf->action_root}zaloguj">
                        <div class="row gtr-uniform gtr-50">

                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <div style="max-width: 35%;margin-left: 32.5%">
                                            <ul class="actions stacked" >
                                                    <li><input type="text" name="name" id="name" value="" placeholder="Imię" /></li>
                                                    <li><input type="email" name="email" id="email" value="" placeholder="Email" /></li>
                                                    <li><input type="text" name="tel" id="tel" value="" placeholder="+48" /></li>
                                                    <li><input type="password" name="password" id="password" value="" placeholder="Hasło" /></li>
                                                    <li><input type="password" name="password2" id="password2" value="" placeholder="Powtórz hasło" /></li>
                                            </ul>
                                            </div>
                                        </header>

                                    </div>
                                </section>  
                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <ul class="actions stacked" >
                                                    <li><input  type="submit" value="Zarejestruj" class="primary" /></li>
                                                    <li><a href="{$conf->action_root}zaloguj">Masz już konto? Zaloguj się.</a></li>
                                            </ul>
                                        </header>

                                    </div>
                                </section>  
                            
                            

                                              
                        </div>
                </form>
        </section>


                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}