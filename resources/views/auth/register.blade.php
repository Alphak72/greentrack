@extends('layouts.auth')

@section('content')
    <div class="row flex-grow">
        @if (Session::has('error'))
            <span class="alert alert-danger">{{ Session::get('error') }}</span>
        @endif
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                    <h4>FASO-CLEAN</h4>
                </div>
                <h4>Nouveau ici ?</h4>
                <h6 class="font-weight-light">S'inscrire est simple. Quelques étapes suffisent.</h6>
                <form class="pt-3" method="POST" action="{{ route('user.register.store') }}">
                    @csrf
                    <!-- Nom -->
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" placeholder="Nom complet">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

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

                    <!-- Phone -->
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" id="phone" placeholder="Numéro de téléphone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Adresse -->
                    <div class="form-group">
                        <input type="text" name="address" class="form-control form-control-lg @error('address') is-invalid @enderror" id="address" placeholder="Adresse">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Bouton submit -->
                    <div class="mt-3">
                        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">S'INSCRIRE</button>
                    </div>

                    <div class="mb-2">
                        <div class="text-center mt-4 font-weight-light"> 
                            Vous avez déjà un compte ?
                            <a href="{{ route('login') }}" class="text-primary">
                                Se connecter
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
