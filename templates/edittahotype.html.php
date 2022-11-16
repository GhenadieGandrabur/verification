 <div class="lt forform"> 
  <h3>Taho type edit</h3>
  <form action="" method="post">    
      <label for="tahotype[id]">ID</label>
      <input type="hidden"  name="tahotype[id]" value="<?= $tahotype['id'] ?? '' ?>">
      <label for="tahotype[type]">Type</label>
      <input  name="tahotype[type]" value="<?= $tahotype['type'] ?? '' ?>">
      <label for="tahotype[recordertype]">Type recorder</label>
      <select name="tahotype[recordertype]">        
               <option value="<?=$taho["recordertype"]=  '0'?>">Analog</option>
               <option value="<?=$taho["recordertype"] = '1'?>">Digital</option> 
      </select>
            
      <input type="submit" name="submit" value="Save changes">
  </form>
  
 </div>
 