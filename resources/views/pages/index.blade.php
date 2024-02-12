@extends('layouts.main-layout')
@section('head-title')
    <title>Home - Laravel DC Comics</title>
@endsection
@section('content')

    <section id="comics">
        <div class="container">
            <div class="title-section">
                <h2 class="uppercase"> current series </h2>
            </div>
            <div class="box-comics">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="card-title">
                            <p class="uppercase">
                                {{ $comic['title'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <div class="btn-load">
                    <a class="uppercase" href="#"> load more</a>
                </div>
            </div>
        </div>
    </section>

@endsection
