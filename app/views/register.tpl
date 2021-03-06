{if $role=="user" }
  {$template = 'main_user_login.tpl'}
{else if $role=="root"}
  {$template = 'main_admin_login.tpl'}
{else}
   {$template = 'main.tpl'} 
{/if}
 {extends $template}



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
                <form method="post" action="{$conf->action_root}register">
                        <div class="row gtr-uniform gtr-50">

                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <div style="max-width: 35%;margin-left: 32.5%">
                                            <ul class="actions stacked" >
                                                    <li><input type="text" name="login" id="login" value="{$login}" placeholder="Login" /></li>
                                                    <li><input type="text" name="name" id="name" value="{$name}" placeholder="Imię" /></li>
                                                    <li><input type="email" name="e_mail" id="e_mail" value="{$e_mail}" placeholder="Email" /></li>
                                                    <li><input type="text" name="phone_number" id="phone_number" value="{$phone_number}" placeholder="+48" /></li>
                                                    <li><input type="password" name="password" id="password" value="{$password}" placeholder="Hasło" /></li>
                                                    <li><input type="password" name="password_confirmation" id="password_confirmation" value="{$password_confirmation}" placeholder="Powtórz hasło" /></li>
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