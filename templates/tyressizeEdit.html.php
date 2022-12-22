<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">   
        <h1>Tyres size edit</h1>
        <form action="" method="post" class="formwork">              
            <input type="hidden" name="tyre[id]" value="<?= $tyre['id'] ?? '' ?>">
            <label for="ts"> Tyre size</label>
            <input id="ts" name="tyre[size]" value="<?= $tyre->size ?? '' ?>">          
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
    <div class="col-4 col-s-4"></div>
</div>
 
