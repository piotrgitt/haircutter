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

         

            <h3>Moje wizyty</h3>

            <section>
                <form method="post" action="{$conf->action_root}delete_reservation" >
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Data i godzina</th>
                                                    <th>Czas trwania</th>
                                                    <th>Imię i nazwisko</th>
                                                    <th>Nr telefonu</th>
                                                    <th>Anuluj rezerwacje</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           {foreach $reservations as $reservation}
                                                {strip}
                                                        <tr>
                                                            <td>{$reservation["service_name"]}</td>
                                                            <td>{$reservation["time"]}</td>
                                                            <td>{$reservation["service_time"]}</td>
                                                            <td>{$reservation["name"]}</td>
                                                            <td>{$reservation["phone_number"]}</td>
                                                            <td><a href="{$conf->action_root}delete_admin_reservation/{$reservation["id_reservation"]}" class="button" value="{$reservation["id_reservation"]}" id="id_reservation" name="id_reservation" onclick="return confirm('Jesteś pewny, że chcesz usunąć rezerwację? ');"> Anuluj rezerwacje </a></td>
                                                        </tr>
                                                {/strip}
                                                {/foreach}    
                                    </tbody>

                            </table>      
                    </div>

                </form>
        </section>                                           
        </div>
</div>
{/block}