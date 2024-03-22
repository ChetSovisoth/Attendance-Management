<ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center bg-gradient-primary  justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <span class="fas fa-brain"></span>
        </div>
        <div class="sidebar-brand-text mx-2 ">{{ config('app.name') }}</div>
    </a>    
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <i class="fa-solid fa-database me-2"></i>
        CRUD
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/employees" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fa-solid fa-users me-2"></i>
            <span>Manage Employee</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/shifts" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fa-solid fa-business-time me-2"></i>
            <span>Manage Shift</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/positions" data-toggle="collapse" data-target="#collapseBootstrapusers" aria-expanded="true" aria-controls="collapseBootstrapusers">
            <i class="fa-solid fa-user-plus me-2"></i>
            <span>Manage Position</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>