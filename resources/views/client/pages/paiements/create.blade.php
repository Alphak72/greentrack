@if (Auth::user()->type_user != 3)
    @include('error.404');
    @dd();
@else

@extends('layouts.client.master')

@section('content')
    <div class="content-wrapper">
        <div class="d-xl-flex justify-content-between align-items-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('client.home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paiements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Paiement de demande {{ $demande->reference }}</h4>
                        <form action="{{ route('client.paiement.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Montant</label>
                                <input type="number" class="form-control" name="amount" value="{{ $demande->amount }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="mode_paiement">Mode de paiement</label>
                                <select name="mode_paiement" id="mode_paiement" class="form-control">
                                    <option value="" selected>-- Choisir un mode de paiement --</option>
                                    <option value="Orange Money">Orange Money</option>
                                    <option value="Moov Money">Moov Money</option>
                                    <option value="Wave">Wave</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Especes">Especes</option>
                                </select>
                            </div>
                            <div class="form-group" style="display: none">
                                <label for="reference">Reference</label>
                                <input type="text" class="form-control" name="reference" value="{{ $demande->reference }}" readonly>
                            </div>
                            <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Payer</button>
                                    <a href="{{ route('client.paiement.index') }}" class="btn btn-danger">Retour</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endif