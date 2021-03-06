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
                        <h2>Cennik</h2>
                </header>  
                <!-- Strzyżenie -->
                <section>
                        <header class="minor">
                                <h2>Strzyżenie</h2>
                        </header>  
                    
                    
                        <div class="table-wrapper">
                                <table>
                                        <thead>
                                                <tr>
                                                      
                                                        <th>Description</th>
                                                        <th>Krótkie włosy</th>
                                                        <th>Włosy średnie </th>
                                                        <th>Długie włosy</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                       
                                                        <td>Strzyżenie męskie (mycie, strzyżenie, modelowanie)</td>
                                                        <td>50zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                <tr>
           
                                                        <td>Strzyżenie damskie (mycie, strzyżenie, modelowanie)</td>
                                                        <td>65zł</td>
                                                        <td>75zł</td>
                                                        <td>85zł</td>
                                                </tr>
                                                <tr>

                                                        <td>Strzyżenie dzieci do lat 10</td>
                                                        <td>40zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                <tr>
          
                                                        <td>Strzyżenie Hair Tattoo</td>
                                                        <td>50zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                <tr>
                 
                                                        <td>Modelowanie damskie (mycie, modelowanie)</td>
                                                        <td>45zł</td>
                                                        <td>55</td>
                                                        <td>65</td>
                                                </tr>
                                                <tr>
                 
                                                        <td>Modelowanie męskie (mycie, modelowanie)</td>
                                                        <td>25zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                
                                                <tr>
                 
                                                        <td>Broda (strzyżenie, trymowanie brody, golenie maszynką)</td>
                                                        <td>30zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                
                
                <!-- koloryzacja -->
                        <header class="minor">
                                <h2>Koloryzacja</h2>
                        </header>  
                    
                    
                        <div class="table-wrapper">
                                <table>
                                        <thead>
                                                <tr>
                                                      
                                                        <th>Description</th>
                                                        <th>Krótkie włosy</th>
                                                        <th>Włosy średnie </th>
                                                        <th>Długie włosy</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                       
                                                        <td>Koloryzacja jednolita (mycie, koloryzacja, strzyżenie, modelowanie)</td>
                                                        <td>160zł</td>
                                                        <td>185zł</td>
                                                        <td>215zł</td>
                                                </tr>
                                                <tr>
           
                                                        <td>Balayage (mycie, koloryzacja, strzyżenie, modelowanie)</td>
                                                        <td>190zł</td>
                                                        <td>210zł</td>
                                                        <td>250zł</td>
                                                </tr>
                                                <tr>

                                                        <td>Refleksy + koloryzacja (mycie, koloryzacja, strzyżenie, modelowanie)</td>
                                                        <td>190zł</td>
                                                        <td>210zł</td>
                                                        <td>250zł</td>
                                                </tr>
                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}