<br>
<div class="row bgg">
<div class="col-12 col-s-12">
  <h1>Certificat de verificare  nr: <?=$certificate['id']??""?> din: <?= date("d.m.Y")  ?? '' ?></h1>   
<hr>
</div>
    <div class="col-4 col-s-4 p3 ">
<?php 

?>      
      <h2>Vehicol</h2>
      <hr>
      <form action="" method="post">     
      <label for="vehicle">Vehicol number</label>        
     <select  id="vehicle" name="certificate[vehicle]">>
      <?php foreach($certificates as $certificate):?>
         <option style="width:100px ;" value="<?=$certificate['vehicle']?>">"<?=$certificate['vehicle']?>"</option>
      <?php endforeach;?>
     </select>

    </div>
    <div class="col-4 col-s-4 p3 ">
     <h2>Tahograf</h2>
     <hr>
    </div>
    
    <div class="col-4 col-s-4 p3 ">                  
      <h2>Verificare</h2>
      <hr>
    <label for="k_vechi">K vechi</label>
    <input type="text" id="k_vechi" name="certificate[k_vechi]" size="10" maxlength="5" value="<?= $certificate['k_vechi'] ?? '' ?>"><br>
              
              
              <label for="k_now">K nou  </label>
              <input  id="k_now" name="certificate[k_nou]" size="10" maxlength="5"   value="<?= $certificate['k_now'] ?? '' ?>"><br>
              
              <label for="w_vechi">w vechi  </label>
              <input  id="w_vechi" name="certificate[w_vechi]" size="10" maxlength="5"   value="<?= $certificate['w_vechi'] ?? '' ?>"><br>
              
              <label for="w nou">w nou  </label>
              <input  id="w_now" name="certificate[w_nou]" size="10" maxlength="5"   value="<?= $certificate['w_now'] ?? '' ?>"><br>
              
              <label for="name">odometru pina  </label>
              <input  id="odometrupina" name="certificate[odometrupina]" size="10" maxlength="7"  value="<?= $certificate['odometrupina'] ?? '' ?>"><br>
              
              <label for="name">odometru dupa  </label>                  
              <input  id="k_now" name="certificate[odometrudupa]" size="10" maxlength="7"  value="<?= $certificate['odometrudupa'] ?? '' ?>"><br>
              
              <label for="name">presiune</label>                   
              <input   name="certificate[presiune]" size="10" maxlength="3"  value="<?= $certificate['presiune'] ?? '' ?>"><br>

              <label for="name">lungimea circomferentii  </label>
              <input   name="certificate[lungimeacircomferentii]" size="10" maxlength="4"  value="<?= $certificate['lungimeacircomferentii'] ?? '' ?>"><br>
              <label for="name">limitator de viteza  </label>
              <input   name="certificate[limitatordeviteza]" size="10" maxlength="3"  value="<?= $certificate['limitatordeviteza'] ?? '' ?>"><br>
              <label for="name">Valabilitate  </label>
              <input   name="certificate[valabilitate]" size="10" maxlength="10"  value="<?= $certificate['valabilitate'] ?? '' ?>"><br>
              <label for="name">Baterea </label>
              <input  type = "checkbox" name="certificate[baterea]" value="<?= $certificate['baterea'] ?? '' ?>"><br>
              <p><input type="submit" name="submit" value="Save"></p>
            </form>         
          </div>
        </div>