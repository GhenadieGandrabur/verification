<div class="row">
  <div class="col-12 col-s-12 ">
    <div class="row" style="padding:0; margin:0;">
      <div class="col-12 col-s-12 " style="padding:0; margin:0;">
        <h3 style="padding:0; margin:0;">Certificat de verificare nr: <?= $certificate->id ?? "" ?> din: <?= date("d.m.Y")  ?? '' ?></h3>
      </div>
    </div>
    <div class="col-3 col-s-3 ">
      <form action="" method="POST">
<table class="tableedit">
     <tr><th>Vehicle</th></tr>
  <tr><td>Search a vehicle</td></tr>
   <tr><td id="findcontainer"> <input style="border:2px red solid;" id="find" type="text" placeholder="Number or VIN of a vehicle" autocomplete="off">
   <div class="bookmarks"></div></td></tr> 
   <tr><td><input type="hidden" id="id" name="certificate[id]" value="<?= $certificate->id ?? "" ?>"></td></tr>
   <tr><td><label for="vehicle">Number</label></td></tr>
   <tr><td><input id="vehicle" name="certificate[vehicle]" value="<?= $certificate->vehicle ?? "" ?>" readonly></td></tr>
   <tr><td><label for="vin">VIN</label></td></tr>
   <tr><td><input id="vin" name="certificate[vin]" value="<?= $certificate->vin ?? "" ?>" readonly></td></tr>
   <tr><td><label for="brand">Brand</label></td></tr> 
   <tr><td><input id="brand" name="certificate[brandId]" value="<?= $certificate->brandId ?? "" ?>" readonly></td></tr>
   <tr><td><label for="model">Model</label></td></tr>
   <tr><td><input id="model" name="certificate[model]" value="<?= $certificate->model ?? "" ?>" readonly></td></tr>  
   <tr><td><label for="owner">Owner</label></td></tr>
   <tr><td><input id="owner" name="certificate[proprietar]" value="<?= $certificate->proprietar ?? "" ?>" readonly></td></tr>
   <tr><td><label for="tyresize">Tyre size</label></td></tr> 
   <tr><td><input id="tyresize" name="certificate[tyresize]" value="<?= $certificate->tyresize ?? "" ?>" readonly></td></tr>
   <tr><td><label for="vehicleyear">Year production</label></td></tr>
   <tr><td><input id="vehicleyear" name="certificate[yearproduction]" value="<?= $certificate->yearproduction  ?? "" ?>" readonly></td></tr> 
   </table>
   </div>
   <div class="col-3 col-s-3">
   <table class="tableedit"> 
   <tr><th>Tahograf</th></tr>
   <tr><td><label for="tahonumber">Taho number</label></td></tr>
   <tr><td><input id="tahonumber" name="certificate[tahoId]" value="<?= $certificate->tahoId ?? "" ?>" readonly></td></tr>
   <tr><td><label for="tahotype">Taho type</label></td></tr>
   <tr><td><input id="tahotype" name="certificate[tahotype]" value="<?= $certificate->tahotype ?? "" ?>" readonly></td></tr>
   <tr><td><label for="tahomesurement">Taho mesurement</label></td></tr>
   <tr><td><input id="tahomesurement" name="certificate[measurementRange]" value="<?= $certificate->measurementRange ?? "" ?>" readonly></td></tr>
   <tr><td><label for="tahorecordtype">Taho recorder type</label></td></tr>
   <tr><td><input id="tahorecordtype" name="certificate[recordertypeId]" value="<?= $certificate->recordertypeId ?? "" ?>" readonly></td></tr>   
  </tr>  
</table>
</div>

<div class = "col-3 col-s-3"> 
  <table class = "tableedit">
    <tr><th>Verification</th></tr>      
    <tr><td><label for="k_vechi">K old</label></td></tr>
    <tr><td><input id="k_vechi" name="certificate[k_vechi]" value="<?= $certificate->k_vechi  ?? '' ?>"></td></tr> 
    <tr><td><label for="k_now">K new </label></td></tr>
    <tr><td><input id="k_now" name="certificate[k_nou]" value="<?= $certificate->k_now  ?? '' ?>"></td></tr>
    <tr><td><label for="w_vechi">w old </label></td></tr>
    <tr><td><input id="w_vechi" name="certificate[w_vechi]" value="<?= $certificate->w_vechi  ?? '' ?>"></td></tr> 
    <tr><td><label for="w nou">w new </label></td></tr>
    <tr><td><input id="w_now" name="certificate[w_nou]" value="<?= $certificate->w_now  ?? '' ?>"></td></tr>   
    <tr><td><label for="name">Km before</label></td></tr> 
    <tr><td><input id="odometrupina" name="certificate[odometrupina]" value="<?= $certificate->odometrupina  ?? '' ?>"></td></tr>
    <tr><td><label for="name">Km after </label></td></tr>
    <tr><td><input id="odometrudupa" name="certificate[odometrudupa]" value="<?= $certificate->odometrudupa  ?? '' ?>"></td></tr>
    <tr><td><label for="name">Pressure</label></td></tr>     
    <tr><td><input name="certificate[presiune]" value="<?= $certificate->presiune  ?? '' ?>"></td></tr>
    <tr><td><label for="name">L </label></td></tr>     
    <tr><td><input name="certificate[lungimeacircomferentii]" maxlength="4" value="<?= $certificate->lungimeacircomferentii  ?? '' ?>" autocomplete="off"></td></tr>
    <tr><td><label for="name">Speed limit</label></td></tr>           
    <tr><td><input name="certificate[limitatordeviteza]" value="<?= $certificate->limitatordeviteza  ?? '' ?>"></td></tr>
    <tr><td><label for="name">Validity</label></td></tr>
    <tr><td><input  name="certificate[validity]" value="<?= $certificate->validity  ?? '' ?>"></td></tr>
    <tr> <td><label for="name">Batery </label></td></tr>        
    <tr><td>      
          <select name="certificate[baterea]">
          <option selected disabled></option>
            <option value="1" <?= $certificate->baterea ? "selected checked" : "" ?> >Yes</option>
            <option value="0" <?= $certificate->baterea ? "" : "selected checked" ?> >No</option>
          </select>
    </td></tr>
    <tr><td><input class="but_save" type="submit" name="submit" value="Save" id="submit"></td></tr>
    </table>     
    </form>    
    </div>

    <div class="col-3 col-s-3">
      <div style="text-align: center;margin-top:50px">
        <img src="/images/truck.jpg" width="100%">
      </div>
    </div>
  </div>

</div>
<script>
  document.getElementById("find").addEventListener("keyup", (event) => {
    event.preventDefault()
    if (event.target.value.trim() == "") return;
    fetch(`/vehicle/likelist?number=${event.target.value}`)
      .then(res => res.json())
      .then(json => {
        if (json && json.length > 0) {
          const bookmarks = document.querySelector("#findcontainer .bookmarks")
          bookmarks.innerHTML = "";
          for (let bookmark of json) {
            bookmarks.innerHTML += `<div class="bookmark">${bookmark.numberplate}</div>`
          }
        }
      })
  })
  document.addEventListener("click", function(event) {

    if (event.target.classList.contains("bookmark")) {
      const value = event.target.innerText
      fetch(`/vehicle/detailes?number=${value}`)
        .then(res => res.json())
        .then(json => {
          if (json && json.numberplate) {           
            document.querySelector("input[id = vehicle]").value = json.numberplate
            document.querySelector("input[id = vin]").value = json.vin
            document.querySelector("input[id = brand]").value = json.brandId
            document.querySelector("input[id = model]").value = json.model
            document.querySelector("input[id = owner]").value = json.owner
            document.querySelector("input[id = tyresize]").value = json.tyresize
            document.querySelector("input[id = vehicleyear]").value = json.yearproduction
            if (json.tahoId) {
              console.log(json.tahoId)
              fetch(`/taho/detailes?id=${json.tahoId}`)
                .then(res => res.json())
                .then(json => {
                  document.querySelector("input[id  = tahonumber]").value = json.tahoId
                  document.querySelector("input[id = tahotype]").value = json.tahotypeId
                  document.querySelector("input[id = tahomesurement]").value = json.measurementRange
                  document.querySelector("input[id = tahorecordtype]").value = json.recordertypeId
                })
            }
          }
          document.querySelector("#findcontainer .bookmarks").innerHTML = ""
        })
    }
  })
  document.getElementById('k_vechi').addEventListener('keyup', function(event) {
    document.getElementById("w_vechi").value = event.target.value
  })

  document.getElementById('k_now').addEventListener('keyup', function(event) {
    document.getElementById("w_now").value = event.target.value
  })

  document.getElementById('odometrupina').addEventListener('keyup', function(event) {
    if (parseInt(event.target.value || 0) > 0) {
      document.getElementById("odometrudupa").value = parseInt(event.target.value) + 10
    } else {
      document.getElementById("odometrudupa").value = ""
    }
  })
  
</script>