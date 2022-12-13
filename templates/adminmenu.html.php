    <ul class="menu">
        <?php if ($loggedIn?? false) : ?>
        <li><a href="/">Home</a></li>
        <li><a href="/certificates/list">Certificate</a></li>
        <li><a href="/vehiclesowners/list">Proprietari</a></li>
        <li><a href="/autos/list">Autovehicole</a></li>
        <li><a href="/taho/list">Tahografe</a></li>
        <li><a href="/tahotype/list">Type taho</a></li>
        <li><a href="/tyres/list">Tyres</a></li>
        <li><a href="/users/list">Users</a></li>            
            <li><a href="/logout">Log out</a></li>
        <?php else : ?>
            <li><a href="/login">Log in</a></li>            
        <?php endif; ?>
    </ul>

