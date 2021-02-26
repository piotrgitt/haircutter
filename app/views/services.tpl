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
                        <h2>Usługi</h2>
                </header>
                <!-- Strzyżenie -->
                        <section>
                                <div class="row gtr-150">
                                    
                                        <div class="col-6 col-12-medium">
                                            <section id="sidebar">
                                                <section>
                                                        <header class="minor" >
                                                            <h2>Strzyżenie</h2>
                                                        </header>   
                                                        <p> W ramach usługi wykonujemy konsultację, mycie 
                                                            szamponem pielęgnacyjnym, relaksujący masaż skóry głowy,
                                                            precyzyjne strzyżenie za pomocą nożyczek lub/i maszynki, 
                                                            modelowanie włosów.

                                                            Na życzenie klienta wykonujemy również strzyżenie Hair Tattoo, 
                                                        strzyżenie grzywki lub zarostu </p>    
                                                </section>
                                            </section>
                                        </div>
                                        <div class="col-6 col-12-medium">
                                        <section id="content">

                                            <div ><span class="image fit"><img src="{$app_url}/../images/front2_cut.jpg" style="max-height: 23em" alt="" /></span></div>
                                        </section>       
                                        </div>
                                </div>
                        </section>
                
                
                         <!-- Modelowanie -->
                        <section>
                                <div class="row gtr-150">
                                    
                                        <div class="col-6 col-12-medium">
                                            <section id="sidebar">
                                                <section>
                                                    <div ><span class="image fit"><img src="{$app_url}/../images/services_2.jpg" style="max-height: 23em" alt="" /></span></div>
                                                </section>
                                            </section>
                                        </div>
                                        <div class="col-6 col-12-medium">
                                        <section id="content">
                                            <header class="minor" >
                                                            <h2>Modelowanie</h2>
                                                        </header>   
                                                        <p> W ramach usługi wykonujemy konsultację,
                                                            mycie szamponem pielęgnacyjnym,relaksujący
                                                            masaż skóry głowy, modelowanie włosów.</p>    
                   

                                        </section>       
                                        </div>
                                </div>
                        </section>
                        <!-- Koloryzacja -->
                        <section>
                                <div class="row gtr-150">
                                    
                                        <div class="col-6 col-12-medium">
                                            <section id="sidebar">
                                                <section>
                                                        <header class="minor" >
                                                            <h2>Koloryzacja</h2>
                                                        </header>   
                                                        <p> W ramach usługi koloryzacji wykonujemy konsultację,
                                                            dobór koloru, farbowanie, mycie szamponem pielęgnacyjnym,
                                                            relaksujący masaż skóry głowy, nakładamy odżywkę
                                                            lub profesjonalny środek pielęgnacyjny zgodnie z 
                                                            życzeniem klienta oraz modelowanie.<br> Proponujemy 
                                                            koloryzację jednolitą, słoneczne refleksy,
                                                            balayage, ombre, sombre lub cover siwych włosów, tzn.
                                                            tuszowanie siwych włosów u mężczyzn, który jest jednocześnie
                                                            idealnym sposobem na skuteczną pielęgnację. </p>    
                                                </section>
                                            </section>
                                        </div>
                                        <div class="col-6 col-12-medium">
                                        <section id="content">

                                            <div ><span class="image fit"><img src="{$app_url}/../images/front3.jpg" style="max-height: 23em" alt="" /></span></div>
                                        </section>       
                                        </div>
                                </div>
                        </section>   
                                        
                        <!-- Usługi specjalne -->
                        <section>
                                <div class="row gtr-150">
                                    
                                        <div class="col-6 col-12-medium">
                                            <section id="sidebar">
                                                <section>
                                                    <div ><span class="image fit"><img src="{$app_url}/../images/services_3.jpg" style="max-height: 23em" alt="" /></span></div>
                                                </section>
                                            </section>
                                        </div>
                                        <div class="col-6 col-12-medium">
                                        <section id="content">
                                            <header class="minor" >
                                                <h2>Usługi specjalne</h2>
                                            </header>   
                                            <h4>Dekoloryzacja i tonowanie</h4>
                                            <p>w skład usługi wchodzi konsultacja, 
                                                ściąganie koloru, dobór koloru, farbowanie,
                                                nałożenie odżywki lub profesjonalnego środka 
                                                pielęgnacyjnego zgodnie z życzeniem klienta,
                                                mycie szamponem pielęgnacyjnym, relaksujący
                                                masaż skóry głowy i modelowanie.</p>    
                                            
                                            <h4>Stylizacja okolicznościowa</h4>
                                            
                                            <p>pełną gama upięć, koków wieczorowych, loków i innych fryzur okolicznościowych takich jak:<br><br>
                                                fryzury koktajlowe – Fryzury idealne na przyjęcia oraz bankiety.
                                                Koszt usługi ustalany jest indywidualnie po konsultacji w salonie.
                                                Usługa składa się z konsultacji, mycia szamponem pielęgnacyjnym, 
                                                stylizacji i modelowania,
                                                <br><br>
                                                fryzury ślubne – ślub to wyjątkowy dzień, dlatego dopasowujemy 
                                                fryzurę ślubną biorąc pod uwagę twarz, sylwetkę i suknię panny młodej.
                                                Dobieramy również odpowiednią koloryzację oraz dodatki i ozdoby
                                                do fryzury. Koszt usługi ustalany jest indywidualnie po konsultacji
                                                w salonie. Usługa składa się z konsultacji, mycia szamponem 
                                                pielęgnacyjnym, stylizacji i modelowania..
                                            </p>    
                   

                                        </section>       
                                        </div>
                                </div>
                        </section>
                    <!-- Seanse pielęgnacyjne -->
                        <section>
                                <div class="row gtr-150">
                                    
                                        <div class="col-6 col-12-medium">
                                            <section id="sidebar">
                                                <section>
                                                        <header class="minor" >
                                                            <h2>Seanse pielęgnacyjne</h2>
                                                        </header>   
                                                        <p>Specjalne zabiegi, kt
                                                            óre służą regeneracji i
                                                            pielęgnacji wszelkiego rodzaju wło
                                                            sów. Dla każdego problemu dobierany jest spec
                                                            jalny produkt o dokładnie wyselekcjonowanych skład
                                                            nikach. Początkowo specjalista sprawdza kondycję 
                                                            włosów oraz skóry głowy, celem dobrania zindywidualizowanej 
                                                            pielęgnacji, w stu procentach trafiającej 
                                                            w problem. Następnie, podczas nakładania 
                                                            produktu na skórę głowy, wykonywany jest
                                                            delikatny, relaksujący masaż skóry głowy.
                                                            </p>    
                                                </section>
                                            </section>
                                        </div>
                                        <div class="col-6 col-12-medium">
                                        <section id="content">

                                            <div ><span class="image fit"><img src="{$app_url}/../images/services_4_cut.jpg" style="max-height: 23em" alt="" /></span></div>
                                        </section>       
                                        </div>
                                </div>
                        </section>  
                                                
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}