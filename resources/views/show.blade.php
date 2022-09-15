@extends('master')
@section('title') {{ $post->title }} @endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card my-3 bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h3 class="m-0">Post Detail</h3>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="card-text text-muted">{{ $post->description }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <p class="text-success">{{ $post->created_at->format('d M Y | g:i A') }}</p>
                            <div class="d-flex align-items-center">
                                {{--del btn--}}
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger btn-sm me-2">Del</button>
                                </form>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-info btn-sm me-2">Edit</a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
