@if (Auth()->user()->type_user != 1)
    @include('error.404');
    @dd();
@else

@extends('layouts.admin.master')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Rôles et permissions </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.role.index') }}">Rôles et permissions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.role.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom du rôle <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-center">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
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