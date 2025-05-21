@if (Auth::user()->type_user != 3)
    @include('error.404');
    @dd();
@else

@extends('layouts.client.master')

@section('content')
    <div class="content-wrapper">
        <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Tableau de bord des clients </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
             
            </div>
        </div>
    </div>
@endsection

@endif