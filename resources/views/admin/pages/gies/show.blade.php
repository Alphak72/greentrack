@if (Auth()->user()->type_user != 1)
    @include('error.404');
    @dd();
@else

@extends('layouts.admin.master')

@section('content')
    <div class="content-wrapper">
        <div class="d-xl-flex justify-content-between align-items-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.gie.index') }}">Gies</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Détails</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-2 text-dark font-weight-normal">Demandes acceptées</h2>
                        <h5 class="mb-4 text-dark font-weight-bold">932</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-2 text-dark font-weight-normal">Demandes refusées</h2>
                        <h5 class="mb-4 text-dark font-weight-bold">100</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-2 text-dark font-weight-normal">Montant payés</h2>
                        <h5 class="mb-4 text-dark font-weight-bold">@money(100000, 'XOF')</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-2 text-dark font-weight-normal">Montant non payés</h2>
                        <h5 class="mb-4 text-dark font-weight-bold">@money(20000, 'XOF')</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-2 text-dark font-weight-normal">Nombre de demandes</h2>
                        <h5 class="mb-4 text-dark font-weight-bold">120</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endif