<div class="container">
    <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
            <h1 class="fw-bold m-0">GREENTRACK</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
        
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Notre projet</a>
                    <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Presentation</a>
                        <a href="team.html" class="dropdown-item">Notre equipe</a>
                        <a href="testimonial.html" class="dropdown-item">Témoignages</a>
                    </div>
                </div>

                <a href="#" class="nav-item nav-link">GIE</a>

                <a href="#" class="nav-item nav-link">Contacts</a>
            </div>
            <div class="ms-auto d-none d-lg-block">
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-3">Se connecter</a>
            </div>
        </div>
    </nav>
</div>