                
<h3>Demandez le service</h3>
                <h4>Completer ce formulaire :</h4>
                <form action="jardi.php" method="POST">
                  <div class="control-group form-group">
                        <div class="controls">
                            <label>Nom complet:</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Numero de telephone:</label>
                            <input type="number" class="form-control" name="numero">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Adresse mail:</label>
                            <input type="email" class="form-control" name="mail">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                          <label>Adresse complete: </label>
                            <input type="text" class="form-control" name="adresse">
                        </div>
                         
                        En quelle date voulez-vous obtenir ce service<br>
                        <label><strong>Date :</strong></label>
                        
                          <div class="col-md-6 col-lg-5">
                          <div class="input-group date mg-check-in">
                            <div class="input-group-addon"><i class="far fa-calendar-alt"></i></div>
                            <input class="form-control" type="text" name="date" id="exampleInputEmail1" placeholder="date" autocomplete="off">
                          </div>
                        </div> 
     </div>
                     
                        <i class="fa fa-clock-o"></i> 
                    <abbr title="Heure">Heure</abbr>:
                    <input style="width: 100px;" 
                    placeholder="heure" 
                      type="time"
                      id="input"
                      name="heure" 
                      class="form-control"
                      value="12:00"
                      whith="20px"
                       mdbInput
                        />

                     </p>
                          
                        </td>
                           
                       
                        
                    
                        <label>Detail du service :</label>
                        <textarea name="detail" rows="5" cols="50" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" ></textarea><br>
                        <input type="hidden" name="val" value="pending">
                        <input type="hidden" name="per" value="" disabled="">
                        <input type="hidden" name="fin" value="0" disabled="">