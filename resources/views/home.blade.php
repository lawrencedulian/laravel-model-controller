@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($movies as $movie)
                    <div class="col mt-5">
                        <div class="card">
                            <img src="{{ $movie->image }}" alt="">
                            <h5 class="text-center mt-2">{{ $movie->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        </div>


    </section>
@endsection
