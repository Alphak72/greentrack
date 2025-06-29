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
                    <li class="breadcrumb-item active" aria-current="page">Paiements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <livewire:gie.paiement.index-paiement />
        </div>
    </div>
@endsection

@endif