@php
    $reference_max_id = App\Models\DemandeClient::max('id') + 1;
    $reference_code = "RE_" . str_pad($reference_max_id, 4, '0', STR_PAD_LEFT)
@endphp

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
                    <li class="breadcrumb-item"><a href="{{ route('client.demande.index') }}">Demandes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('client.demande.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reference">Référence <span class="text-danger">*</span></label>
                                        <input type="text" name="reference" class="form-control @error('reference') is-invalid @enderror" value="{{ $reference_code }}" readonly>
                                        @error('reference')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date <span class="text-danger">*</span></label>
                                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="desc">Poubelle <span class="text-danger">*</span></label>
                                        <select name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror">
                                            <option value="" selected>-- Choisir votre poubelle --</option>
                                            @foreach ($poubelles as $poubelle)
                                                <option value="{{ $poubelle->product }}" {{ old('desc') == $poubelle->product ? 'selected' : '' }}>{{ $poubelle->product }} - @money($poubelle->price, 'XOF')</option>
                                            @endforeach
                                        </select>
                                        @error('desc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="gie_id">GIE <span class="text-danger">*</span></label>
                                        <select name="gie_id" id="gie_id" class="form-control  @error('gie_id') is-invalid @enderror">
                                            <option value="" selected>-- Chosir un gie --</option>
                                            @foreach ($gies as $gie)
                                                <option value="{{ $gie->id }}" {{ old('gie_id') == $gie->id ? 'selected' : '' }}>{{ $gie->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('gie_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        <a href="{{ route('client.demande.index') }}" class="btn btn-danger">Retour</a>
                                    </div>
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