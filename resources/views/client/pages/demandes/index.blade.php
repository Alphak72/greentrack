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
                    <li class="breadcrumb-item active" aria-current="page">Demandes</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <livewire:clients.demandes.index-demande />
        </div>
    </div>
@endsection

@endif