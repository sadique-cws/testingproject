@extends('work.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            
            <div class="col-lg-6 mx-auto">
               <div class="card">
                   <div class="card-body">
                       <form action="{{route('post.update',['post'=>$record->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$record->title}}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">author</label>
                            <input type="text" name="author" class="form-control"  value="{{$record->author}}">
                        </div>

                        <div class="mb-3">
                            <label for="">body</label>
                            <textarea name="body" class="form-control" rows="5">
                                {{$record->body}}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <input type="submit"  class="btn btn-success w-100"  value="Send"/>
                        </div>
                    
                    </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection