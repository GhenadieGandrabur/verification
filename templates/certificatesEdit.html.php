
<div class="row">
<div class="col-12 col-s-12">
  <h1>Certificat de verificare  nr: <?=$certificate ->id ??""?> din: <?= date("d.m.Y")  ?? '' ?></h1>   

</div>
    <div class="col-4 col-s-4 p3 ">
     
      <h2>Vehicol</h2>
      
      <form action="" method="POST" class="log"> 
       <div style=" background-color:#ccc; padding:10px">
      <label for="find"><span style="font-weight:bold ;">Search a vehicle</span></label>
      <input id="find" type="text" placeholder="Number or VIN of a vehicle">
      
       </div>
       
    <p style="clear: left;"></p>
    <label for = "vehicle">Number</label>
    <input id = "vehicle" name = "certificate[vehicle]" value="<?=$certificate->vehicle ?? ""?>">
    <label for = "vin">VIN</label><input id = "vin" name = "certificate[vin]">
    <label for = "owner">Owner</label><input id = "owner" name = "certificate[proprietar]" value = "<?=$certificate->proprietar ?? ""?>">    
    <label for = "tyresize">Tyre size</label><input id = "tyresize" name = "vehicle-tyresize">
    <label for = "vehicleyearproduction">Year production</label><input id = "vehicleyearproduction" name = "vehicle-yearproduction">
    <p style="clear: left;"></p>
    <h2>Tahograf</h2>

    <label for = "tahonumber">Taho number</label><input id = "tahonumber" name = "taho-number">
    <label for = "tahotype">Taho type</label><input id = "tahotype" name = "taho-tahotype">
    <label for = "tahomesurement">Taho mesurement</label><input id = "tahomesurement" name = "taho-mesurement">
    <label for = "tahorecordtype">Taho record type</label><input id = "tahorecordtype" name = "taho-recordtype">
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
<input   name="certificate[lungimeacircomferentii]"  maxlength="4"  value="<?= $certificate->lungimeacircomferentii  ?? '' ?>">
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
        <script>
          document.getElementById("find").addEventListener("keyup",(event)=>{
            event.preventDefault()
            fetch(`/vehicle/detailes?number=${event.target.value}`)
              .then(res=>res.json())
              .then(json=>{              
                if(json&&json.numberplate){
                  document.querySelector("input[id = vehicle]").value = json.numberplate
                  document.querySelector("input[id = vin]").value = json.vin
                  document.querySelector("input[id = owner]").value = json.owner
                  document.querySelector("input[id = tyresize]").value = json.tyresize
                  document.querySelector("input[id = vehicleyearproduction]").value = json.yearproduction
                  if(json.tahoId){
                     fetch(`/taho/detailes?id=${json.tahoId}`)
                      .then(res=>res.json())
                      .then(json=>{                  
                  document.querySelector("input[name = taho-number]").value = json.tahonumber
                  document.querySelector("input[name = taho-tahotype]").value =json.tahotypeId
                  document.querySelector("input[name = taho-mesurement]").value = json.measurementRange	
                  document.querySelector("input[name = taho-recordtype]").value = json.recordertypeId
                    })
                  }
                }
              })
          
          })
        </script>