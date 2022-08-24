@extends('master')
@section('title')
    {{$post->title}}
@stop
@section('contact')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h3 class="mb-0">{{$post->title}}</h3>

                                <p class="mb-0 text-black-50">What is on your mind..?</p>
                            </div>
                            <div class="class">
                                <a href="{{route('post.index')}}" class="btn btn-outline-primary">HOME</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="card my-3">
                        <div class="card-body ">
                            <div class="card-header mb-3 d-flex justify-content-between align-items-center">
                                <h3 class="card-title">{{$post->title}}</h3>
                                <p>{{$post->created_at->format('d M Y | n : i A')}}</p>
                            </div>
                            <p class="text-black-50 card-text">{{$post->description}}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
