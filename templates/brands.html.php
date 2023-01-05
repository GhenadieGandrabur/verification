<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
    <div class="lt">
        <h3>Brands list</h3>
        <p><button class="button_edit" onclick="newbrand()">New brand</button> <?= $totalbrands  ?> sizes in DB</p>
        <table class="fortable">
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
            <tr>
                <?php foreach ($brands as $brand) : ?>
                    <td> <?= $brand ->id  ?></td>
                    <td> <?= $brand ->namebrand ?></td> 
                    <td>               
                        <a href="/brand/edit?id=<?= $brand ->id  ?>"> Edit</a>                        
                    </td>
                    <td class="tc">
                        <form action="/brand/delete" method="post">
                        <input type="hidden" name="id" value="<?= $brand->id  ?>">
                        <input type="submit" value="❌">
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
</div>
        <div class="col-4 col-s-4"></div>