@extends('master')
@section('title') Sample Blog - Home @endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card my-3 bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="m-0">Hello...</h1>
                                <p class="m-0 text-muted">What's on your mind?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach($posts as $post)

                    <div class="card mb-3 shadow-sm bg-light">
                        <div class="card-body">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="card-text text-muted">{{ Str::words($post->description, 50) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                {{--show date & time--}}
                                <p class="text-success">{{ $post->created_at->format('d M Y | g:i A') }}</p>

                                <div class="d-flex">
                                    {{--del btn--}}
                                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger btn-sm me-2">Del</button>
                                    </form>
                                    {{--see more btn--}}
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-info btn-sm me-2">Edit</a>
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-outline-secondary btn-sm float-end">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
