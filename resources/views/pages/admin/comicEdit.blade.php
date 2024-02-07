@extends('layouts.app')


@section('title')
    DC Comics
@endsection

@section('main-content')
    <div class="wrapper">
        <h2 class="section-title text-uppercase text-white">
            set changes
        </h2>
    </div>
    <section class="comics container-fluid p-5">
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="col-10 px-5">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-10">
                <form action="{{ route('admin.comic.update', $comic->id) }}" method="post" class="m-5 text-white">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label text-capitalize">title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label text-capitalize">thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label text-capitalize">price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $comic->price) }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label text-capitalize">series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('series', $comic->series) }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label text-capitalize">sale date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label text-capitalize">type</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ old('type', $comic->type) }}">
                    </div>
                    <div class="mb-3">
                        <label for="artists" class="form-label text-capitalize">artists</label>
                        <input type="text" class="form-control" id="artists" name="artists"
                            value="{{ old('artists', $comic->artists) }}">
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label text-capitalize">writers</label>
                        <input type="text" class="form-control" id="writers" name="writers"
                            value="{{ old('writers', $comic->writers) }}">
                    </div>
                    <div class="mb-5">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{ old('title', $comic->description) }}</textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-dark shadow me-3">Submit</button>
                        <button type="reset" class="btn btn-danger shadow">Reset</button>
                    </div>
            </div>
            </form>
        </div>
    </section>
@endsection
