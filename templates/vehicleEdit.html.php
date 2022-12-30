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
            <div id="test">
            <input  id="tahoId" name = "vehicle[tahoId]" value=""  autocomplete="off">
            </div>
            
            <label  for="tyresize">Tyre size</label>               
            <input  id="tyresize" name = "vehicle[tyresize]" value=""  autocomplete="off">
             
            
              
                  
            <label  for="owner">Owner</label>
            <input  id="owner" name = "vehicle[owner]" value="<?=$vehicle->owner ??""?>" placeholder="from owner">  

            <label  for="submit"></label>
            <input  id="submit" type="submit" value=" Save ">     
          </form>
        </div>
          <div class="col-4 col-s-4"></div>
</div>
<script>
  function hintInit(elementId,url,property){   
    const input =document.getElementById(elementId)
    const hintsContainer = document.createElement("div")
    hintsContainer.setAttribute("class","findcontainer")
    const hints = document.createElement("div")
    hints.setAttribute("class","hints") 
    hintsContainer.append(hints)
    input.after(hintsContainer)
    input.addEventListener("keyup",(event)=>{
      event.preventDefault() 
      console.log(event.target.value)
      if(event.target.value.trim()=="")return;
      fetch(`${url}${event.target.value}`)
        .then(res=>res.json())
        .then(json=>{                     
          hints.innerHTML = "";
          if(json&&json.length>0){                  
              for(let hint of json){
                hints.innerHTML += `<div class="hint">${hint[property]}</div>`
              }
          }                
        })          
    })
    document.addEventListener("click",function(event){           
      if(event.target.classList.contains("hint")){
        const value = event.target.innerText 
       event.target.parentElement.parentElement.previousSibling.value = value
       // document.getElementById(elementId).value = value
        hints.innerHTML = ""                
      }else{
        hints.innerHTML = "" 
      }
    })
  }
  hintInit("tahoId","/taho/likelist?number=", "tahonumber")
  hintInit("owner","/vehiclesowners/likelist?name=", "name")
  hintInit("tyresize","/tyres/likelist?size=", "size")
</script>