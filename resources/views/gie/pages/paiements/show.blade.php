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
                    <li class="breadcrumb-item"><a href="{{ route('gie.paiement.index') }}">Paiements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Détails</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Référence</th>
                                <th>{{ $paiement->reference }}</th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>{{ \Carbon\Carbon::parse($paiement->date)->format('d/m/Y') }}</th>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <th>{{ $paiement->desc }}</th>
                            </tr>
                            <tr>
                                <th>Client</th>
                                <th>{{ $paiement->client->name }}</th>
                            </tr>
                            <tr>
                                <th>Montant</th>
                                <th>@money($paiement->amount, 'XOF')</th>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <th>
                                    @if ($paiement->status > 1)
                                        <span class="text-primary">Payé</span>
                                    @else
                                        <a href="#" class="btn btn-danger">Faire une réclamation</a>
                                    @endif 
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

@endif