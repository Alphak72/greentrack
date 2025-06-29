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
                    <li class="breadcrumb-item"><a href="{{ route('temoignage.index') }}">Témoignages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('temoignage.update', ['id' => $testimonial->id]) }}" method="POST">
                            @csrf
                            <div class="form-group" style="display: none">
                                <label for="client_id">Client</label>
                                <input type="number" class="form-control" name="client_id" value="{{ $testimonial->client_id }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="desc">Message</label>
                                <textarea name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror">{{ $testimonial->desc }}</textarea>
                                @error('desc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <a href="{{ route('temoignage.index') }}" class="btn btn-danger">Retour</a>
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