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
            <input  id="yearProduction" name = 'vehicle[yearProduction]' value="<?=$vehicle->yearProduction ??""?>">


            <label  for="tahoId">Taho number</label>
            <input  id="tahoId" name = "vehicle[tahoId]" value="<?=$vehicle->tahoId ??""?>" placeholder="from taholist">            
            
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
