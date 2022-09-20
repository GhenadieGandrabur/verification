
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/certificates/list">Certificates</a></li>
        <li><a href="/vehiclesowners/list">Proprietari</a></li>
        <li><a href="/vehicles/list">Vehicles</a></li>
        <li><a href="/taho/list">Tahographs</a></li>
        <li><a href="/users/list">Users</a></li>
        <?php if ($loggedIn) : ?>
            <li><a href="/logout">Log out</a></li>
        <?php else : ?>
            <li><a href="/login">Log in</a></li>
        <?php endif; ?>
    </ul>
