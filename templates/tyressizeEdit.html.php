<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
    <div class="forminput"> 
        <h3>Tyres size edit</h3>
        <form action="" method="post">    
            <label for="tyre[id]">ID</label>
            <input type="" name="tyre[id]" value="<?= $tyre['id'] ?? '' ?>">
            <label for="tyre[size]">Tyre size</label>
            <input name="tyre[size]" value="<?= $tyre['size'] ?? '' ?>">     
            <label for="submit"></label>
            <input type="submit" name="submit" value="Save"></input>
        </form>
    </div>
    <div class="col-4 col-s-4"></div>
</div>
 
