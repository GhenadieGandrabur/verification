<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">       
    <form action="" method="post" class="classic">
        <table class="tableedit b">
            <tr>
                <td colspan="2" class="bgg tc"> <h3>Brand edit</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="brand[id]" value="<?= $brand->id ?? '' ?>">
                </td>
            </tr>
            <tr>
            <td><label for="brand"> Brand</label></td>
            <td><input id="brand" name="brand[namebrand]" value="<?= $brand->namebrand ?? '' ?>"></td>
            </tr>
            <td colspan="2" class="tc">
                <input type="submit" name="submit" value="Save">
            </td>
            </tr>
    </table>
</form>
</div>
<div class="col-4 col-s-4"></div>
</div>

