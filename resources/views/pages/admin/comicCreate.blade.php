@extends('layouts.app')


@section('title')
    DC Comics
@endsection

@section('main-content')
    <div class="wrapper">
        <h2 class="section-title text-uppercase text-white">
            add new
        </h2>
    </div>
    <section class="comics">
        <form action="{{ route('pages.comicStore') }}" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-ligth">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </section>
@endsection
