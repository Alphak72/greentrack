@extends('layouts.auth')

@section('content')
    <div class="row flex-grow">
        @if (Session::has('account_desactivated'))
            <span class="alert alert-danger">{{ Session::get('account_desactivated') }}</span>
        @endif
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                    <h4>FASO-CLEAN</h4>
                </div>
                <h4>Bonjour ! Commençons</h4>
                <h6 class="font-weight-light">Connectez-vous pour continuer.</h6>
                <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Username -->
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username" placeholder="Username">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Mot de passe -->
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" placeholder="Mot de passe">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Bouton submit -->
                    <div class="mt-3">
                        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SE CONNECTER</button>
                    </div>

                    <div class="mb-2">
                        <div class="text-center mt-4 font-weight-light"> 
                            Vous n'avez pas de compte ?
                            <a href="{{ route('user.register.create') }}" class="text-primary">
                                Créer
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
