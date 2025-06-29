<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('gie.home') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-home-account menu-icon"></i>
                </span>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#demande" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg">
                    <i class="mdi mdi-file-check menu-icon"></i>
                </span>
                <span class="menu-title">Demandes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="demande">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('gie.demande.attente') }}">En attente</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('gie.demande.traite') }}">Traitées</a>
                    </li>
                </ul>
            </div>
        </li>

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
                        <a class="nav-link" href="{{ route('gie.paiement.index') }}">Les paiements</a>
                    </li>
                    
                    <li class="nav-item"> 
                        <a class="nav-link" href="#">Rapports</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="icon-bg">
                    <i class="mdi mdi-home-account menu-icon"></i>
                </span>
                <span class="menu-title">Clients</span>
            </a>
        </li>
    </ul>
</nav>