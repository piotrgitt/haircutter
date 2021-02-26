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
                    <h2>Rezerwacja</h2>
            </header>  

            <h3>Wybierz usługę</h3>
            <section>
                <form method="post" action="{$conf->action_root}process" >
                    <!-- Table -->
                    <fieldset>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Cena</th>
                                                    <th>Czas trwania</th>
                                                    <th>hello</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           {foreach $services as $service}
                                                {strip}
                                                        <tr>
                                                            <td>{$service["service_name"]}</td>
                                                            <td>{$service["service_price"]}</td>
                                                            <td>{$service["service_time"]}</td>
                                                            
                                                            <td> 
                                                                <div class="pretty p-default p-round p-thick">
                                                                    <input type="radio" name="service" id="service" value="{$service["id_service"]}" />
                                                                    
                                                                    

                                                                    <div class="state p-danger">
                                                                        <label> </label>
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                {/strip}
                                                {/foreach}    
                                    </tbody>
                            </table>
                                    
                                    
                    </div>
                                    
                    <label for="meeting-time">Wybierz datę i godzinę rezerwacji:</label>

                    <input style="color: black; width: 12em" type="datetime-local" id="date_time"
                    name="date_time" value="{$form->date_time}"
                    min="2021-02-01T00:00" max="2022-06-14T00:00">      
                                    
                    </fieldset>
                      <hr>
                    <div class="col-12">
                            
                        <input type="submit" value="rezerwuj termin" class="primary" />
                   
                    </div>

                </form>
        </section>
            
        <!-- PRETTY DATE PICKER -->
       {* <section>    
            <button class="simplepicker-btn">Wybierz datę</button>
            <div class="event-log">Event logs:<br></div>
            <script src="{$conf->app_url}/../lib/simplepicker/dist/simplepicker.js"></script>
            <script>
                let simplepicker = new SimplePicker({
                  zIndex: 10
                });

                        //  simplepicker.open();

                const $button = document.querySelector('button');
                const $eventLog = document.querySelector('.event-log');
                $button.addEventListener('click', (e) => {
                  simplepicker.open();
                });

                // $eventLog.innerHTML += '\n\n';
                simplepicker.on('submit', (date, readableDate) => {
                  $eventLog.innerHTML += readableDate + '\n';
                });

                simplepicker.on('close', (date) => {
                  $eventLog.innerHTML += 'Picker Closed'  + '\n';
                });
            </script>
        </section>*}
        
           
         
   
      
        
        
        


                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}