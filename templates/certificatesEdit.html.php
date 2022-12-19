
<div class="row">
<div class="col-12 col-s-12">
  <h1>Certificat de verificare  nr: <?=$certificate ->id ??""?> din: <?= date("d.m.Y")  ?? '' ?></h1>   

</div>
    <div class="col-4 col-s-4 p3 ">
     
      <h2>Vehicle</h2>
      
      <form action="" method="POST" class="log"> 
       <div style=" background-color:#ccc; padding:10px">
      <label for="find"><span style="font-weight:bold ;">Search a vehicle</span></label>
      <input id="find" type="text" placeholder="Number or VIN of a vehicle">
      
       </div>
       
    <p style="clear: left;"></p>
    <input  type="hidden" id = "id" name = "certificate[id]" value="<?=$certificate->id ?? ""?>">
    <label for = "vehicle">Number</label>
    <input id = "vehicle" name = "certificate[vehicle]" value="<?=$certificate->vehicle ?? ""?>">
    <label for = "vin">VIN</label><input id = "vin" name = "certificate[vin]" value = "<?=$certificate->vin ?? ""?>">
    <label for = "owner">Owner</label><input id = "owner" name = "certificate[proprietar]" value = "<?=$certificate->proprietar ?? ""?>">    
    <label for = "tyresize">Tyre size</label><input id = "tyresize" name = "certificate[tyresize]" value = "<?=$certificate->tyresize ?? ""?>" >
    <label for = "vehicleyear">Year production</label><input id = "vehicleyear" name = "certificate[yearproduction]" value ="<?=$certificate->yearproduction  ?? "" ?>">
    <p style="clear: left;"></p>
    <h2>Tahograf</h2>

    <label for = "tahonumber">Taho number</label><input id = "tahonumber" name = "certificate[tahoId]" value="<?=$certificate->tahoId ?? "" ?>">
    <label for = "tahotype">Taho type</label><input id = "tahotype" name = "certificate[tahotype]" value="<?=$certificate->tahotype ?? "" ?>">
    <label for = "tahomesurement">Taho mesurement</label><input id = "tahomesurement" name = "certificate[measurementRange]" value = "<?=$certificate->measurementRange ?? "" ?>">
    <label for = "tahorecordtype">Taho record type</label><input id = "tahorecordtype" name = "certificate[recordertypeId]"  value = "<?=$certificate->recordertypeId ?? "" ?>">
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
<select name = "certificate[baterea]">
  <option selected disabled ></option>
  <option value="1" <?=$certificate->baterea?"selected checked":""?>>Yes</option>
  <option value="0" <?=$certificate->baterea?"":"selected checked"?>>No</option>
</select>
<label for="submit"></label>

<input type="submit" name="submit" value="Save" id="submit">
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
                  document.querySelector("input[id = vehicleyear]").value = json.yearproduction
                  if(json.tahoId){
                     fetch(`/taho/detailes?id=${json.tahoId}`)
                      .then(res=>res.json())
                      .then(json=>{    
                        console.log(json)              
                  document.querySelector("input[id  = tahonumber]").value = json.tahonumber
                  document.querySelector("input[id = tahotype]").value =json.tahotypeId
                  document.querySelector("input[id = tahomesurement]").value = json.measurementRange	
                  document.querySelector("input[id = tahorecordtype]").value = json.recordertypeId
                    })
                  }
                }
              })          
          })
        </script>