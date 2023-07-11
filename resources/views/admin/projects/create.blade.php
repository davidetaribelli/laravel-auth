@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center p-4">
                <div class="col-7 my-3">
                    <form action="{{route('admin.projects.store')}}" method="POST">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg-primary" for="title">Title</label>
                            <input type="text" name="title" placeholder="Insert title" class="px-3 py-2 border border-secondary form-control rounded-end @error('title') is-invalid @enderror">
                            @error("title")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>  
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg-primary" for="description">Description</label>
                            <textarea type="text" name="description" placeholder="Insert description" class="px-3 py-2 border border-secondary form-control rounded-end @error('description') is-invalid @enderror"></textarea>
                            @error("description")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg-primary" for="thumb">Thumb</label>
                            <input type="text" name="thumb" placeholder="Insert thumb" class="px-3 py-2 border border-secondary form-control rounded-end @error('thumb') is-invalid @enderror">
                            @error("thumb")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg-primary" for="link">Link</label>
                            <input type="text" name="link" placeholder="Insert link" class="px-3 py-2 border border-secondary form-control rounded-end @error('price') is-invalid @enderror">
                            @error("link")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="text-white input-group-text bg_blue me-3 border-0 bg-primary">Invia</button>
                    </form>
                </div>
            </div>
            <div class="load_ text-center">
                <a href="{{route("admin.projects.index")}}" class="py-1 px-4 border-0 m-4 text-white btn btn-primary">HOME</a>
            </div>
        </div>
    </div>
</section>
@endsection