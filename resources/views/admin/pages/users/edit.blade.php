@if (Auth()->user()->type_user != 1)
    @include('error.404');
    @dd();
@else

@extends('layouts.admin.master')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Utilisateurs </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nom complet <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="username">Username <span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $user->username }}">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="is_active">Statut <span class="text-danger">*</span></label>
                                        <select name="is_active" id="is_active" class="form-control @error('is_active') is-invalid @enderror">
                                            <option value="" selected>Choisir un statut</option>
                                            <option value="1" {{ $user->is_active == 1 ? 'selected' : '' }}>Actif</option>
                                            <option value="0" {{ $user->is_active == 0 ? 'selected' : '' }}>Non actif</option>
                                        </select>
                                        @error('is_active')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="type_user">Type user <span class="text-danger">*</span></label>
                                        <select name="type_user" id="type_user" class="form-control @error('type_user') is-invalid @enderror">
                                            <option value="" selected>Choisir le type user</option>
                                            <option value="1" {{ $user->type_user == 1 ? 'selected' : '' }}>Super admin</option>
                                            <option value="2" {{ $user->type_user == 2 ? 'selected' : '' }}>GIE</option>
                                        </select>
                                        @error('type_user')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="company">Entreprise <span class="text-danger">*</span></label>
                                        <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" id="company" value="{{ $user->company }}">
                                        @error('company')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="role">Rôles </label>
                                        <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                            <option value="" selected>Choisir le rôle</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}" {{ $user->role == $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                            <span class="text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                                <a href="{{ route('user.role.index') }}" class="btn btn-danger">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endif