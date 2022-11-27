<div class="row">
<div class="col-3 coll-s-3"></div>
<div class="col-6 coll-s-6">

    <div class="forminput"> 
        <h3 class="tc">Taho type edit</h3>
    <form action="" method="post">    
       
        <input type="hidden"  name="tahotype[id]" value="<?= $tahotype['id'] ?? '' ?>">
        <label for="tahotype[typetaho]">Type</label>
        <input  name="tahotype[typetaho]" value="<?= $tahotype['typetaho'] ?? '' ?>">
        <label for="tahotype[recordertype]">Type recorder</label>
        <select name="tahotype[recordertype]">        
            <option value="<?=$taho["recordertype"]=  '0'?>">Analog</option>
            <option value="<?=$taho["recordertype"] = '1'?>">Digital</option> 
        </select>
        
        <input type="submit" name="submit" value="Save changes">
    </form>
</div>
    
    <div class="col-3 coll-s-3"></div>
</div>

</div>