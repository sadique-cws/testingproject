@extends('work.base')

@section('content')
    <div class="container mt-4">
        <div class="row">

            @if(session('msg'))
               {!! session('msg') !!}
            @endif
            <div class="col-lg-12">
                @foreach ($blogs as $blog)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6>{{$blog->title}}</h6>
                            <p class="small">{{$blog->author}}</p>
                            <p class="lead">{{$blog->body}}</p>
                            <a href="{{route('post.edit',['post'=>$blog->id])}}" class="btn btn-danger ms-2 float-end">Update</a>
                            <a href="" class="btn btn-success float-end">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection