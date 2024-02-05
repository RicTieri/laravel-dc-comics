@extends('layouts.app')


@section('title')
DC Comics
@endsection

@section('main-content')
<div class="wrapper">
  <h2 class="section-title text-uppercase text-white">
    {{$comic['series']}}
  </h2>
</div>
<section class="comics">
  <div class="container py-5 ">
    <div class="row py-5">
      <div class="col-12 mb-3">
        <div class="card p-0 h-100 border border-0">
          <img src="{{$comic['thumb']}}" class="card-img-top rounded-2" alt="{{$comic['series']}}">
          <div class="card-body text-white text-capitalize px-0">
            <h5 class="card-title">{{$comic['title']}}</h5>
            <p>{{$comic['series']}}</p>
            <p>{{$comic['description']}}</p>
            <h6>Artisti:</h6>
            <ul>
                @forelse ($comic['artists'] as $artist)
                    <li>{{ $artist }}</li>
                @empty
                    Nessun artista trovato...
                @endforelse
            </ul>
            <h5 class="text-end">{{$comic['price']}}</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
