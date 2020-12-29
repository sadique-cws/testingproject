@extends('work.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
               <div class="card">
                   <div class="card-body">
                       <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">body</label>
                            <textarea name="body" class="form-control" rows="5"></textarea>
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