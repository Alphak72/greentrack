@if (Auth::user()->type_user != 1)
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
                    <li class="breadcrumb-item active" aria-current="page">Témoignages</li>
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
                                    <th> # </th>
                                    <th class="text-center"> Témoignages </th>
                                    <th class="text-center"> Statut </th>
                                    <th class="text-center"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($testimonials->count() > 0)
                                    @foreach ($testimonials as $key => $testimonial)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td class="text-center"> {{ $testimonial->desc }} </td>
                                            <td class="text-center">
                                                @if ($testimonial->status > 1)
                                                    <span class="text-primary">Approuvé</span>
                                                @else
                                                    <span class="text-danger">Non approuvé</span>
                                                @endif 
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sm btn-primary">
                                                    <i class="mdi mdi-pencil" style="font-size: 1rem"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger" onclick="return(confirm('Vous etes sur le point de supprimer un element.'))">
                                                    <i class="mdi mdi-delete-circle" style="font-size: 1rem"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="text-center">
                                        <td colspan="4" class="text-danger">Aucun element disponible.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endif