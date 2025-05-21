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
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <livewire:admin.index-user />
        </div>
    </div>
@endsection

@endif