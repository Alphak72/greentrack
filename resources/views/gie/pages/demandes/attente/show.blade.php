@if (Auth::user()->type_user != 2)
    @include('error.404');
    @dd();
@else

@extends('layouts.gie.master')

@section('content')
    <div class="content-wrapper">
        <div class="d-xl-flex justify-content-between align-items-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('gie.home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Attentes</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Référence</th>
                                <th>{{ $demande->reference }}</th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>{{ \Carbon\Carbon::parse($demande->date)->format('d/m/Y') }}</th>
                            </tr>
                            <tr>
                                <th>Nom du client</th>
                                <th>{{ $demande->client->name }}</th>
                            </tr>
                            <tr>
                                <th>Adresse du client</th>
                                <th>{{ $demande->client->address }}</th>
                            </tr>
                            <tr>
                                <th>Détails</th>
                                <th>{{ $demande->desc }}</th>
                            </tr>
                            <tr>
                                <th>Montant</th>
                                <th>@money($demande->amount, 'XOF')</th>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <th>
                                    @if ($demande->status == 0)
                                        <span class="text-danger">En attente</span>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        </table>

                        <div class="text-right mt-4">
                            <a href="{{ route('gie.demande.attente.store', ['id' => $demande->id]) }}" class="btn btn-primary">Accepter la demande</a>
                            <a href="{{ route('gie.demande.attente.cancel', ['id' => $demande->id]) }}" class="btn btn-outline-danger">Rejeter la demande</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endif