<li class="nav-header">Beranda</li>

<li class="nav-item">
    <a href="<?= route_to('guru.dash') ?>"
        class="nav-link <?= $menu === 'dashboard' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="<?= route_to('profile') ?>" 
        class="nav-link <?= $menu === 'profile' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Profile
        </p>
    </a>
</li>

