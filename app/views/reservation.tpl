{extends file="main.tpl"}

{block name=content}



<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Rezerwacja</h2>
            </header>  
            
            <h3>Wybierz usługę</h3>
            <hr>

            
            
            
            
            <section>
                <form method="post" action="#">
                    <!-- Table -->
                 
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Czas trwania</th>
                                                    <th>Koszt</th>
                                                    <th>Check box</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                    <td>Item 1</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>29.99</td>
                                                    <td> <div class="col-6 col-12-medium">
                                                            <input type="checkbox" id="x1" name="x1">
                                                            <label for="x1"> </label></div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                    <td>Item 2</td>
                                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                    <td>19.99</td>
                                                    <td> <div class="col-6 col-12-medium">
                                                            <input type="checkbox" id="x2" name="x2">
                                                            <label for="x2"> </label></div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                    <td>Item 3</td>
                                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                                    <td>29.99</td>
                                                    <td> <div class="col-6 col-12-medium">
                                                            <input type="checkbox" id="x3" name="x3">
                                                            <label for="x3"> </label></div>
                                                    </td>
                                            </tr>
                                            
                                    </tbody>
                                    <tfoot>
                                            <tr>
                                                    <td colspan="2"></td>
                                                    <td>100.00</td>
                                            </tr>
                                    </tfoot>
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
        
           
         <label for="meeting-time">Wybierz datę i godzinę rezerwacji:</label>

        <input style="color: black; width: 12em" type="datetime-local" id="meeting-time"
               name="meeting-time" value="2018-06-12T19:30"
               min="2021-02-01T00:00" max="2022-06-14T00:00">
   
        <hr>
        
        
        <div class="col-12">
                <ul class="actions">
                        <li><input type="submit" value="rezerwuj termin" class="primary" /></li>
                </ul>
        </div>
        


                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}