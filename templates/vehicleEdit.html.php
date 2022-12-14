<div class="row">
        <div class="col-4 col-s-4"></div>
        <div class="col-4 col-s-4">   
          
          <h1>Vehicle edit</h1>
          <form action="" method="POST" class="formwork">   
            
            
            <label   for="id">ID</label>
            <input  id="id" name = "vehicle[id]" value="<?=$vehicle->id ??""?>">
            
            
            <label  for="number">Number</label>
            <input  id="number" name = 'vehicle[numberplate]' value="<?=$vehicle->numberplate ??""?>">
            
            <label  for="vin">VIN</label>
            <input  id="vin" name = 'vehicle[vin]' value="<?=$vehicle->vin ??""?>">
            
            <label  for="yearProduction">Year production</label>
            <input  id="yearProduction" name = 'vehicle[yearProduction]' value="<?=$vehicle->yearProduction ??""?>">


            <label  for="tahoId">Owner</label>
            <input  id="tahoId" name = "vehicle[tahoId]" value="<?=$vehicle->tahoId ??""?>">            
            
            <label  for="tyresize">Tyre size</label>
            <input  id="tyresize" name = "vehicle[tyresize]" value="<?=$vehicle->tyresize ??""?>">      
                  
            <label  for="owner">Owner</label>
            <input  id="owner" name = "vehicle[owner]" value="<?=$vehicle->owner ??""?>">  

            <label  for="submit"></label>
            <input  id="submit" type="submit" value=" Save ">     
          </form>
        </div>
          <div class="col-4 col-s-4"></div>
</div>
