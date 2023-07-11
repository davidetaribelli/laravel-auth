@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-center g-4">
            <div class="card mb-3" style="width: 35rem;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{$project->thumb}}" class="img-fluid rounded-start" alt=""{{$project->title}}"">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->title}}</h5>
                      <p class="card-text">{{$project->description}}</p>
                      <a class="card-text" href="{{$project->link}}"> <small class="text-muted">{{$project->link}}</small></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route("admin.projects.edit", $project->id)}}" class="py-1 px-4 border-0 m-4 text-white btn bg_orange">EDIT</a>
        <form action="{{route("admin.projects.destroy", $project)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="py-1 px-4 border-0 m-4 text-white btn bg_red" value="DELETE">
        </form>
        <a href="{{route("admin.projects.index")}}" class="py-1 px-4 border-0 m-4 text-white btn bg_orange">HOME</a>
    </div>
</div>
@endsection