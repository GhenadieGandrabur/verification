<div class="row">
        <div class="col-4 col-s-4"></div>
        <div class="col-4 col-s-4">   
          
          <h3>Vehicle edit</h3>
          <form action="" method="POST">   
<table class="tableedit">
  <tr>
    <td><label   for="id"></label></td>
    <td><input type="hidden" id="id" name = "vehicle[id]" value="<?=$vehicle->id ??""?>"></td>
  </tr>
  <tr>
    <td><label  for="number">Number</label></td>
    <td><input  id="number" name = 'vehicle[numberplate]' value="<?=$vehicle->numberplate ??""?>"></td>
  </tr>
  <tr>
    <td><label  for="vin">VIN</label></td>
    <td><input  id="vin" name = 'vehicle[vin]' value="<?=$vehicle->vin ??""?>"></td>
  </tr>
  <tr>
    <td><label  for="brandId">Brand</label></td>
    <td><input  id="brandId" name = 'vehicle[brandId]' value="<?=$vehicle->brandId ??""?>" autocomplete="off"></td>
  </tr>
  <tr>
    <td><label  for="modele">Model</label></td>
    <td><input  id="model" name = 'vehicle[model]' value="<?=$vehicle->model ??""?>"></td>
  </tr>
  <tr>
    <td><label  for="yearProduction">Year production</label></td>
    <td><input  id="yearProduction" name = 'vehicle[yearProduction]' value="<?=$vehicle->yearproduction ??""?>"></td>
  </tr>
  <tr>
    <td><label  for="tahoId">Taho number</label> </td>
    <td><input  id="tahoId" name = "vehicle[tahoId]" value="<?=$vehicle->tahoId??""?>"  autocomplete="off"></td>
  </tr>
  <tr>
    <td><label  for="tyresize">Tyre size</label></td>
    <td><input  id="tyresize" name = "vehicle[tyresize]" value="<?=$vehicle->tyresize??""?>"  autocomplete="off"></td>
  </tr>
  <tr>
    <td><label  for="owner">Owner</label></td>
    <td><input  id="owner" name = "vehicle[owner]" value="<?=$vehicle->owner ??""?>" ></td>
  </tr>
  <tr>
    <td><label  for="submit"></label></td>
    <td><input  id="submit" type="submit" value=" Save "> </td>
  </tr>
</table>    
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
  hintInit("tahoId","/taho/likelist?number =", "tahonumber")
  hintInit("owner","/vehiclesowners/likelist?name=", "name")
  hintInit("tyresize","/tyres/likelist?size=", "size")
  hintInit("brandId","/brands/likelist?brandId=", "namebrand")
</script>