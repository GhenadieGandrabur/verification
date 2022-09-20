<div class="container p-1  ">
<form action="" method="post">
    <h3>Certificat nr: <input disabled size="4" type="" name="certificate[id]" value="<?= $certificate['id'] ?? '' ?>">
    <input disabled type="" name="certificate[date]" value="<?= date("d.m.Y")  ?? '' ?>"></h3>

    <input type="submit" name="submit" value="Save">

    <div class="row">
        <div class="col-sm-4 ">
         <fieldset>
             <legend>Vehicol</legend> 
    
                  <div class="col-50"><label for="name">Proprietar</label></div>
                  <div class="col-50"><input id="vehicle" name="certificate[vehicle]" value="<?= $certificate['vehicle'] ?? '' ?>"></div>
            
                  <div class="col-50"><label for="name">Vehicol</label></div>
                  <div class="col-50"><input id="proprietar" name="certificate[proprietar]" value="<?= $certificate['proprietar'] ?? '' ?>"></div>
             
        </fieldset>   
        </div>
      <div class="col-sm-4 ">
        <fieldset>
           <legend>Tahograf</legend>           
        </fieldset>

      </div>
      <div class="col-sm-4 border-top">      
         <fieldset>
            <legend>Verificarea</legend>
                   
                  <div class="col-50"><label for="k_vechi">K vechi</label></div>
                  <div class="col-50"><input  id="k_vechi" name="certificate[k_vechi]" value="<?= $certificate['k_vechi'] ?? '' ?>"></div>
             
                
                  <div class="col-50"><label for="k_now">K nou  </label></div>
                  <div class='col-50'><input  id="k_now" name="certificate[k_nou]" value="<?= $certificate['k_now'] ?? '' ?>"></div>
                    
                  <div class="col-50"><label for="w_vechi">w vechi  </label></div>
                  <div class='col-50'><input  id="w_vechi" name="certificate[w_vechi]" value="<?= $certificate['w_vechi'] ?? '' ?>"></div>
                 
                  <div class="col-50"><label for="w nou">w nou  </label></div>
                  <div class='col-50'><input  id="w_now" name="certificate[w_nou]" value="<?= $certificate['w_now'] ?? '' ?>"></div>
              
                  <div class="col-50"><label for="name">odometrupina  </label></div>
                  <div class='col-50'><input  id="odometrupina" name="certificate[odometrupina]" value="<?= $certificate['odometrupina'] ?? '' ?>"></div>

                  <div class="col-50"><label for="name">odometrudupa  </label></div>                  
                  <div class='col-50'><input  id="k_now" name="certificate[odometrudupa]" value="<?= $certificate['odometrudupa'] ?? '' ?>"></div>

                  <div class="col-50"><label for="name">presiune </div>                  
                  <div class="col-50"><input  id="presiune" name="certificate[presiune]" value="<?= $certificate['presiune'] ?? '' ?>"></div>
                  <div class="col-50"><label for="name">lungimeacircomferentii  </label></div>
                  <div class='col-50'><input  id="lungimeacircomferentii" name="certificate[lungimeacircomferentii]" value="<?= $certificate['lungimeacircomferentii'] ?? '' ?>"></div>
                  <div class="col-50"><label for="name">limitatordeviteza  </label></div>
                  <div class='col-50'><input  id="limitatordeviteza" name="certificate[limitatordeviteza]" value="<?= $certificate['limitatordeviteza'] ?? '' ?>"></div>
                  <div class="col-50"><label for="name">valabilitate  </label></div>
                  <div class='col-50'><input  id="valabilitate" name="certificate[valabilitate]" value="<?= $certificate['valabilitate'] ?? '' ?>"></div>
                  <div class="col-50"><label for="name">baterea </label></div>
                  <div class='col-50'><input  id="baterea" name="certificate[baterea]" value="<?= $certificate['baterea'] ?? '' ?>"></div>
                    
                  </div>
         </fieldset>
      </div>
      </div>
    </div>
  </div>
  
  

</form>
<hr>