<div class="row">
        <div class="col-4 col-s-4">Left</div>
        <div class="col-4 col-s-4">              
                    <h1>Taho type edit</h1>
                    <form action="" method="post" class="formwork">
                    <input type="hidden"  name="tahotype[id]" value="<?= $tahotype->id ?? '' ?>">
                    <label for="tahotype[typetaho]">Type</label>
                    <input  name="tahotype[typetaho]" value="<?= $tahotype->typetaho ?? '' ?>">
                    <label for="tahotype[recordertype]">Type recorder</label>
                    <label for="tahotype[recordertype]">Type recorder</label>
                    <select name="tahotype[recordertype]"> 
                        <option disabled selected></option>       
                        <option value="1" <?= ($tahotype->recordertype?? null) ===  1 ?"checked selected":""?>>Digital</option> 
                        <option value="0" <?= ($tahotype->recordertype?? null) ===  0 ?"checked selected":""?>>Analog</option>
                    </select>
                   
                    <input type="submit" name="submit" value="Save changes">
                    </form>              
        </div>
        <div class="col-4 col-s-4 ">Right</div>
</div>