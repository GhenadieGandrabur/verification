<div class="row">
        <div class="col-4 col-s-4"></div>
        <div class="col-4 col-s-4">   
          
          <h1>Vehicle edit</h1>
          <form action="" method="POST" class="formwork">   
            
            
            <label   for="id"></label>
            <input type="hidden" id="id" name = "vehicle[id]" value="<?=$vehicle->id ??""?>">
            
            
            <label  for="number">Number</label>
            <input  id="number" name = 'vehicle[numberplate]' value="<?=$vehicle->numberplate ??""?>">
            
            <label  for="vin">VIN</label>
            <input  id="vin" name = 'vehicle[vin]' value="<?=$vehicle->vin ??""?>">

            <label  for="brand">Brand</label>
            <input  id="brand" name = 'vehicle[brandId]' value="<?=$vehicle->brandId ??""?>">

            <label  for="modele">Model</label>
            <input  id="model" name = 'vehicle[model]' value="<?=$vehicle->model ??""?>">
            
            <label  for="yearProduction">Year production</label>
            <input  id="yearProduction" name = 'vehicle[yearProduction]' value="<?=$vehicle->yearproduction ??""?>">


            <label  for="tahoId">Taho number</label>
            <div id="findtaho">
            <input  id="tahoId" name = "vehicle[tahoId]" value="" placeholder="from taholist" autocomplete="off">
            <div class="hints"></div>
            </div>

            <label  for="tyresize">Tyre size</label>
            <select name="vehicle[tyresize]">
               <option disabled selected></option>
               <?php foreach($tyresizes as $tyresize):?>
                  <option value="<?=$tyresize->size?>" <?= $tyresize->size ===( $vehicle->tyresize?? null) ?"checked selected ": "" ?>><?=$tyresize->size?></option>
               <?php endforeach;?>
            </select>
              
                  
            <label  for="owner">Owner</label>
            <input  id="owner" name = "vehicle[owner]" value="<?=$vehicle->owner ??""?>" placeholder="from owner">  

            <label  for="submit"></label>
            <input  id="submit" type="submit" value=" Save ">     
          </form>
        </div>
          <div class="col-4 col-s-4"></div>
</div>
<script>
            document.getElementById("tahoId").addEventListener("keyup",(event)=>{
            event.preventDefault() 
            console.log(event.target.value)
            if(event.target.value.trim()=="")return;
            fetch(`/taho/likelist?number=${event.target.value}`)
              .then(res=>res.json())
              .then(json=>{              
                if(json&&json.length>0){                  
                    const hints = document.querySelector("#findtaho .hints")
                    hints.innerHTML = "";
                    for(let hint of json){
                      hints.innerHTML += `<div class="hint">${hint.tahonumber}</div>`
                    }
                }
              })          
          })
</script>