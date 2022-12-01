<div class="row">
        <div class="col-4 col-s-4 b">Left</div>
        <div class="col-4 col-s-4 b">
              <div class="forminput"> 
                    <h4 class="tc">Taho type edit</h4>
                    <form action="" method="post">
                    <input type="hidden"  name="tahotype[id]" value="<?= $tahotype ->id ?? '' ?>">
                    <label for="tahotype[typetaho]">Type</label>
                    <input  name="tahotype[typetaho]" value="<?= $tahotype ->typetaho ?? '' ?>">
                    <label for="tahotype[recordertype]">Type recorder</label>
                    <select name="tahotype[recordertype]">        
                        <option value="<?=$tahotype->recordertype  =  0 ?? '' ?>">Analog</option>
                        <option value="<?=$tahotype->recordertype = 1 ?? ''?>">Digital</option> 
                    </select>
                    <input type="submit" value="Save changes">
                    </form>
                </div>
               
        </div>
        <div class="col-4 col-s-4 b">Right</div>
</div>