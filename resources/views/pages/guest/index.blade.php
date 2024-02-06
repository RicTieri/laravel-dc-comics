@extends('layouts.app')


@section('title')
    DC Comics
@endsection

@section('main-content')
    <div class="wrapper">
        <h2 class="section-title text-uppercase text-white">
            current series
        </h2>
    </div>
    <section class="comics">
        <div class="container py-5 ">
            <div class="row py-5">
                @foreach ($comics as $comic)
                    <div class="col-2 mb-3">
                        <a href="{{ route('guest.comic.show', $comic->id) }}">
                            <div class="card p-0 h-100 border border-0">
                                <img src="{{ $comic['thumb'] }}" class="card-img-top rounded-2" alt="{{ $comic['series'] }}">
                                <div class="card-body text-white text-capitalize px-0">
                                    <h5 class="card-title">{{ $comic['series'] }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-12 pb-3 text-center">
                    <button type="button" class="btn btn-primary rounded-0 text-uppercase px-5 fw-bolder">Load
                        More</button>
                </div>
            </div>
        </div>
    </section>
@endsection
