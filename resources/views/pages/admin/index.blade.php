@extends('layouts.app')


@section('title')
    DC Comics\Admin
@endsection

@section('main-content')
    <div class="wrapper">
        <h2 class="section-title text-uppercase text-white">
            current series
        </h2>
    </div>
    <section class="comics">
        <div class="container py-5 ">
            <a href="{{ route('admin.comic.create') }}" class="text-white text-uppercase text-decoration-none">
                <button class="btn btn-primary bold me-2 fw-bolder">+</button>
                Add new
            </a>
            <div class="row py-5">
                @foreach ($comics as $comic)
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.comic.show', $comic->id) }}">
                            <div class="card p-0 h-100 border border-0">
                                <img src="{{ $comic['thumb'] }}" class="card-img-top rounded-2"
                                    alt="{{ $comic['series'] }}">
                                <div class="card-body text-white text-capitalize px-0">
                                    <h5 class="card-title">{{ $comic['series'] }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
