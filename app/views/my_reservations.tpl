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
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Data</th>
                                                    <th>Czas trwania</th>
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
                                                            <td><a href="{$conf->action_root}delete_reservation/{$reservation["id_reservation"]}" class="button" value="{$reservation["id_reservation"]}" id="id_reservation" name="id_reservation" onclick="return confirm('Jesteś pewny, że chcesz usunąć rezerwację? ');"> Anuluj rezerwacje </a></td>
                                                        </tr>
                                                {/strip}
                                                {/foreach}    
                                    </tbody>

                            </table>      
                    </div>
        </section>                                           
        </div>
</div>
{/block}