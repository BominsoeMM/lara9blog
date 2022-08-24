@extends('master')
@section('title, Laravel Blog')
    @stop
@section('contact')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h3 class="mb-0">Hello....</h3>
                                <p class="mb-0 text-black-50">What is on your mind..?</p>
                            </div>
                            <div class="class">
                                <a href="{{route('post.create')}}" class="btn btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                @foreach($posts as $post)
                <div class="card my-3">
                    <div class="card-body">
                        <h3 class="card-title">{{$post->title}}</h3>
                        <p class="text-black-50 card-text">{{\Illuminate\Support\Str::words($post->description,50)}}</p>
                        <div class="d-flex justify-content-between">
                            <p>{{$post->created_at->format('d M Y | n : i A')}}</p>
                            <div class="">
                                <form action="{{route('post.destroy',$post->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                                <a href="{{route('post.edit',$post->id)}}" class="btn btn-outline-info">Edit</a>
                                <a class="btn btn-outline-warning" href="{{route('post.show',$post->id)}}">Seemore</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
