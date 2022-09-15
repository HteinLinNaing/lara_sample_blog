@extends('master')
@section('title') Edit Post @endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="">
                                <h1 class="m-0">Edit Post</h1>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Home</a>
                            </div>
                        </div>

                        <form action="{{ route('post.update', $post->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-lg" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Description</label>
                                <textarea type="text" rows="10" class="form-control form-control-lg" name="description">{{ $post->description }}</textarea>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
