@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-start g-4">
            @foreach ($projects as $project)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$project->thumb}}" class="card-img-top" alt="{{$project->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$project->title}}</h5>
                        <p class="card-text">{{$project->description}}</p>
                        <a href="/" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection