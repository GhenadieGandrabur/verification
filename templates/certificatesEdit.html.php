<div class="container">
<form action="" method="post">
  <h5>Certificat de verificare
      <label for="certificate[id]" size="2">nr.</label>
       <input disabled type="text" name="certificate[id]" size ="2" value="<?= $certificate['id'] ?? '' ?>"  >
    <label for="certificate[date]">din</label>
    <input disabled type="" name="certificate[date]" size="8"  value="<?= date("d.m.Y")  ?? '' ?>" >
</h5>

<div class="container">
  
  <div class="row">
    <div class="col-sm-4  ">
      <fieldset>
             <legend>Vehicol</legend> 
             
             <div class="col-50"><label for="name">Vehicol</label></div>
             <div class="col-50"><input id="Vehicol" name="certificate[vehicle]"  value="<?= $certificate['vehicle'] ?? '' ?>"></div>
             
             <div class="col-50"><label for="name">Proprietar</label></div>
             <div class="col-50"><input id="Proprietar" name="certificate[proprietar]" value="<?= $certificate['proprietar'] ?? '' ?>"></div>
             
            </fieldset>   
          </div>
          <div class="col-sm-4">
            <fieldset>
              <legend>Tahograf</legend>           
            </fieldset>
            
          </div>
          <div class="col-sm-4">      
            <fieldset>
              <legend>Verificarea</legend>
                   
              <div class="col-50"><label for="k_vechi">K vechi</label></div>
              <div class="col-50"><input type="text" id="k_vechi" name="certificate[k_vechi]" size="10" maxlength="5" value="<?= $certificate['k_vechi'] ?? '' ?>"></div>
              
              
              <div class="col-50"><label for="k_now">K nou  </label></div>
              <div class='col-50'><input  id="k_now" name="certificate[k_nou]" size="10" maxlength="5"   value="<?= $certificate['k_now'] ?? '' ?>"></div>
              
              <div class="col-50"><label for="w_vechi">w vechi  </label></div>
              <div class='col-50'><input  id="w_vechi" name="certificate[w_vechi]" size="10" maxlength="5"   value="<?= $certificate['w_vechi'] ?? '' ?>"></div>
              
              <div class="col-50"><label for="w nou">w nou  </label></div>
              <div class='col-50'><input  id="w_now" name="certificate[w_nou]" size="10" maxlength="5"   value="<?= $certificate['w_now'] ?? '' ?>"></div>
              
              <div class="col-50"><label for="name">odometrupina  </label></div>
              <div class='col-50'><input  id="odometrupina" name="certificate[odometrupina]" size="10" maxlength="7"  value="<?= $certificate['odometrupina'] ?? '' ?>"></div>
              
              <div class="col-50"><label for="name">odometrudupa  </label></div>                  
              <div class='col-50'><input  id="k_now" name="certificate[odometrudupa]" size="10" maxlength="7"  value="<?= $certificate['odometrudupa'] ?? '' ?>"></div>
              
              <div class="col-50"><label for="name">presiune </div>                  
              <div class="col-50"><input   name="certificate[presiune]" size="10" maxlength="3"  value="<?= $certificate['presiune'] ?? '' ?>"></div>
              <div class="col-50"><label for="name">lungimeacircomferentii  </label></div>
              <div class='col-50'><input   name="certificate[lungimeacircomferentii]" size="10" maxlength="4"  value="<?= $certificate['lungimeacircomferentii'] ?? '' ?>"></div>
              <div class="col-50"><label for="name">limitatordeviteza  </label></div>
              <div class='col-50'><input   name="certificate[limitatordeviteza]" size="10" maxlength="3"  value="<?= $certificate['limitatordeviteza'] ?? '' ?>"></div>
              <div class="col-50"><label for="name">valabilitate  </label></div>
              <div class='col-50'><input   name="certificate[valabilitate]" size="10" maxlength="10"  value="<?= $certificate['valabilitate'] ?? '' ?>"></div>
              <div class="col-50"><label for="name">baterea </label></div>
              <div class='col-50'><input  type = "checkbox" name="certificate[baterea]" value="<?= $certificate['baterea'] ?? '' ?>"></div>
              
            </div>
          </fieldset>
          <hr>
          <p><input type="submit" name="submit" value="Save"></p>
        </div>
      </div>
    </div>
  </div>
</div>
</form>