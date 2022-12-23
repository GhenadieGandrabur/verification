<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">   
        <h1>Brand list edit</h1>
        <form action="" method="post" class="formwork">              
            <input type="hidden" name="brand[id]" value="<?= $brand['id'] ?? '' ?>">
            <label for="brand"> brand size</label>
            <input id="brand" name="brand[namebrand]" value="<?= $brand->namebrand ?? '' ?>">          
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
    <div class="col-4 col-s-4"></div>
</div>
 
