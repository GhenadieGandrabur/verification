
<div class="row">
<div class="col-12 col-s-12">
  <h1>Certificat de verificare  nr: <?=$certificate ->id ??""?> din: <?= date("d.m.Y")  ?? '' ?></h1>   

</div>
    <div class="col-4 col-s-4 p3 ">
     
      <h2>Vehicol</h2>
      
      <form action="" method="POST" class="log">  
      <label for="find">Find a vehicle
      <input id="find" type="search" placeholder="Number or VIN of a vehicle">
      </label>   
     <p style="clear: left;"></p>
    
     <ul>
       <li>VIN</li>
       <li>Owner</li>
       <li>TahoId</li>
       <li>Tyre size</li>   
     </ul>

     <h2>Tahograf</h2>
     
     <ul>
       <li>Taho number</li>
       <li>Taho type</li>
       <li>Measure range</li>
       <li>Recorder type</li>   
     </ul>


    </div>
   
    
    <div class="col-4 col-s-4 p3 log">                  
      <h2>Verificare</h2>
      
    <label for="k_vechi">K vechi</label>
    <input  id="k_vechi" name="certificate[k_vechi]"   value="<?= $certificate ->k_vechi  ?? '' ?>">
              
              
  <label for="k_now">K nou  </label>
              <input  id="k_now" name="certificate[k_nou]"     value="<?= $certificate ->k_now  ?? '' ?>">
              
              <label for="w_vechi">w vechi  </label>
              <input  id="w_vechi" name="certificate[w_vechi]"     value="<?= $certificate ->w_vechi  ?? '' ?>">
              
              <label for="w nou">w nou  </label>
              <input  id="w_now" name="certificate[w_nou]"     value="<?= $certificate ->w_now  ?? '' ?>">
              
              <label for="name">odometru pina  </label>
              <input  id="odometrupina" name="certificate[odometrupina]"    value="<?= $certificate ->odometrupina  ?? '' ?>">
              
              <label for="name">odometru dupa  </label>                  
              <input  id="k_now" name="certificate[odometrudupa]"    value="<?= $certificate ->odometrudupa  ?? '' ?>">
              
              <label for="name">presiune</label>                   
              <input   name="certificate[presiune]"   value="<?= $certificate ->presiune  ?? '' ?>">

              <label for="name">lungimea circomferentii  </label>
              <input   name="certificate[lungimeacircomferentii]"  maxlength="4"  value="<?= $certificate ->lungimeacircomferentii  ?? '' ?>">
              <label for="name">limitator de viteza  </label>
              <input   name="certificate[limitatordeviteza]"   value="<?= $certificate ->limitatordeviteza  ?? '' ?>">
              <label for="name">Valabilitate  </label>
              <input   name="certificate[valabilitate]"    value="<?= $certificate ->valabilitate  ?? '' ?>">
              <label for="name">Baterea </label>
              <input  type = "checkbox" name="certificate[baterea]" value="<?= $certificate ->baterea  ?? '' ?>">
              <p><input type="submit" name="submit" value="Save"></p>
            </form>         
          </div>
          <div class="col-4 col-s-4 ">
            <div style="text-align: center;margin-top:50px">
              <img src="/images/truck.jpg" width="100%">
            </div>
    
    </div>
        </div>