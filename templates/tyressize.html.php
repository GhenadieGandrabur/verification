<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
    <div class="lt">
        <h1>Marime anvelopelor</h1>
        <p><button class="button_edit" onclick="newtyresize()">New tyressize</button> <?= $totalTyres  ?> sizes in DB</p>
        <table class="fortable">
            <th>ID</th>
            <th>Size</th>
            <th>Edit</th>
            <th>Delete</th>
            <tr>
                <?php foreach ($tyres as $tyre) : ?>
                    <td> <?= $tyre ->id  ?></td>
                    <td> <?= $tyre ->size ?></td> 
                    <td>               
                        <a href="/tyres/edit?id=<?= $tyre ->id  ?>"> Edit</a>
                        
                    </td>
                    <td>
                        <form action="/tyres/delete" method="post">
                        <input type="hidden" name="id" value="<?= $tyre->id  ?>">
                        <input type="submit" value="X">
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
</div>
        <div class="col-4 col-s-4"></div>