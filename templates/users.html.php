
<div class="row">
    <div class="col-4 col-s-4"></div>
    <div class="col-4 col-s-4">
        <h1>Users</h1>
        <p><button class="button" onclick="newauthor()">New author</button> <?= $totalUsers ?> users in DB</p>
        
        <table class="fortable">
            
            <th>ID</th><th>Date</th><th>Name</th><th>E-mail<th>Priority</th>
            <tr>
                <?php foreach ($users as $user) : ?>
                    
                    <td> <?= $user->id ?></td>
                    <td> <?= $user->date ?></td> 
                    <td> <?= $user->name ?></td>
                    <td> <?= $user->email ?></td>
                    <td> <?= $user->priority ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <div class="col-4 col-s-4"></div>
</div>