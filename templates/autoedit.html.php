<div class="row">
        <div class="col-4 col-s-4"></div>
        <div class="col-4 col-s-4">   
          
          <h3>Auto edit</h3>
          <form action="" method="POST" class="formwork">   
            
            
            <label   for="id">ID</label>
            <input  id="id" name = "auto[id]" value="<?=$auto['id']??""?>">
            
            
            <label  for="number">Number</label>
            <input  id="number" name = 'auto[numberplate]' value="<?=$auto['numberplate']??""?>">
            
            
            <label  for="owner">Owner</label>
            <input  id="owner" name = "auto[owner]" value="<?=$auto['owner']??""?>">            
            
            <label  for="submit"></label>
            <input  id="submit" type="submit" value=" Save ">     
          </form>
        </div>
          <div class="col-4 col-s-4"></div>
</div>
