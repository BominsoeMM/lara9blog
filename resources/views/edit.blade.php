@extends('master')
@section('title')
  Edit Post
@stop
@section('contact')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h3 class="mb-0">Edit Post</h3>
                            </div>
                            <div class="class">
                                <a href="{{route('post.index')}}" class="btn btn-outline-primary">Cancel</a>
                            </div>
                        </div>
                        <form method="post" action="{{route('post.update',$post->id)}}">
                            @csrf
                            @method('put')
                            <div class="my-4">
                                <input class="form-control form-control-lg" placeholder="Title" value="{{$post->title}}" type="text" name="title" required>
                            </div>
                            <div class="">
                                <textarea class="form-control text-black-50" placeholder="What's on your mind ?" rows="10" name="description" required>{{$post->description}}</textarea>
                            </div>
                            <div class="row mt-3">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
