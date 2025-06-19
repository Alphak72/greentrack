<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-home-account menu-icon"></i>
                </span>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>

        <!-- Demandes -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.demande.index') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-account-details menu-icon"></i>
                </span>
                <span class="menu-title">Démandes</span>
            </a>
        </li>

        <!-- Paiements -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#paiement" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg">
                    <i class="mdi mdi-cash menu-icon"></i>
                </span>
                <span class="menu-title">Paiements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="paiement">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('admin.paiement.gie.index') }}">Paiements des gies</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('admin.paiement.client.index') }}">Paiements des clients</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="#">Rapports</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Clients -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#client" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg">
                    <i class="mdi mdi-account-check menu-icon"></i>
                </span>
                <span class="menu-title">Clients</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="client">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('admin.client.index') }}">Tous les clients</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Gies -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#gie" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg">
                    <i class="mdi mdi-account-check menu-icon"></i>
                </span>
                <span class="menu-title">Gies</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gie">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('admin.gie.index') }}">Tous les Gies</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Tarifs -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.tarif.index') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-cash-multiple menu-icon"></i>
                </span>
                <span class="menu-title">Tarifs</span>
            </a>
        </li>

        <!-- Users -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg">
                    <i class="mdi mdi-account-group menu-icon"></i>
                </span>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('user.index') }}">Liste des users</a>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('user.role.index') }}">Rôles & autorisations</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>