<form action="" method="post">
    <input type="hidden" name="taho[id]" value="<?= $taho['id'] ?? '' ?>">
    <label for="modele">Modele:
    </label>
    <input id="model" name="taho[modele]" rows="1" cols="40"><?= $taho['modele'] ?? '' ?>
     </input>
    <input type="submit" name="submit" value="Save">
</form>