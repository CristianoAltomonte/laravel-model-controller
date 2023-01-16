@extends('layouts.app')

@section('title-page', 'Home')

@section('main-content')
    <h1 class="text-center py-3">Welcome</h1><br>

    <div class="w-75 m-auto">
        <div class="container py-1">
            <div class="d-flex flex-wrap justify-content-between">
                @foreach ($all_movies as $item)
                    <div class="card my-3" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title d-inline">Title: </h5> <span>{{ $item->title }}</span><br>
                            <h5 class="card-title d-inline">Original Title: </h5><span>{{ $item->original_title }}</span><br>
                            <h5 class="card-title d-inline">Nationality: </h5><span>{{ $item->nationality }}</span><br>
                            <h5 class="card-title d-inline">Date: </h5><span>{{ $item->date }}</span><br>
                            <h5 class="card-title d-inline">Vote: </h5><span>{{ $item->vote }}</span><br>

                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
