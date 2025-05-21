@if (Auth()->user()->type_user != 1)
    @include('error.404');
    @dd();
@else

@extends('layouts.admin.master')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Rôles et permissions </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rôles et permissions</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('user.role.create') }}" class="btn btn-outline-primary btn-fw">Nouveau rôle</a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th class="text-center"> Nom </th>
                                    <th class="text-center"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($roles->count() > 0)
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td class="text-center"> {{ $role->name }} </td>
                                            <td class="text-center">
                                                <a href="{{ route('user.role.edit', ['id' => $role->id]) }}" class="btn btn-sm btn-primary">
                                                    <i class="mdi mdi-pencil" style="font-size: 1rem"></i>
                                                </a>

                                                <a href="{{ route('user.role.delete', ['id' => $role->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Vous etes sur le point de supprimer un element.')">
                                                    <i class="mdi mdi-delete-circle" style="font-size: 1rem"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="text-center">
                                        <td colspan="3" class="text-danger">Aucun element disponible.</td>
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