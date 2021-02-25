{extends file="main.tpl"}

{block name=content}



<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">

         

            <h3>Moje wizyty</h3>

            <section>
                <form method="post" action="{$conf->action_root}process" >
                    <!-- Table -->
                    <fieldset>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Data</th>
                                                    <th>Czas trwania</th>

                                            </tr>
                                    </thead>
                                    <tbody>
                                           {foreach $services as $service}
                                                {strip}
                                                        <tr>
                                                            <td>{$service["service_name"]}</td>
                                                            <td>{$service["time"]}</td>
                                                            <td>{$service["duration"]}</td>
            
                                                        </tr>
                                                {/strip}
                                                {/foreach}    
                                    </tbody>
                            </table>
                                    
                                    
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