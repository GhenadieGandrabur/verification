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
                    <label for="tahotype[measurementRange]">Measurement range</label>
                    <select name="tahotype[measurementRange]"> 
                        <option disabled selected></option>       
                        <option value="100 km/h" <?= ($tahotype->measurementRange ?? null) ===  "100 km/h" ?"checked selected":""?>>100</option> 
                        <option value="125 km/h" <?= ($tahotype->measurementRange ?? null) ===  "125 km/h" ?"checked selected":""?>>125</option>
                        <option value="140 km/h" <?= ($tahotype->measurementRange ?? null) ===  "140 km/h" ?"checked selected":""?>>140</option>
                        <option value="180 km/h" <?= ($tahotype->measurementRange ?? null) ===  "180 km/h" ?"checked selected":""?>>180</option>
                        <option value="220 km/h" <?= ($tahotype->measurementRange ?? null) ===  "220 km/h" ?"checked selected":""?>>220</option>
                    </select>
                    <input type="submit" name="submit" value="Save changes">
                    </form>              
        </div>
        <div class="col-4 col-s-4 ">Right</div>
</div>