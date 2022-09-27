
    <ul class="menu">
        <li><a href="/">Home</a></li>
        <li><a href="/certificates/list">Certificate</a></li>
        <li><a href="/vehiclesowners/list">Proprietari</a></li>
        <li><a href="/vehicles/list">Vehicole</a></li>
        <li><a href="/taho/list">Tahografe</a></li>
        <li><a href="/tyres/list">Tyres</a></li>
        <li><a href="/users/list">Users</a></li>
        <?php if ($loggedIn) : ?>
            <li><a href="/logout">Log out</a></li>
        <?php else : ?>
            <li><a href="/login">Log in</a></li>
        <?php endif; ?>
    </ul>
