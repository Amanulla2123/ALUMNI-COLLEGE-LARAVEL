@extends('user.uslayout')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      
        <div class="content-body">
          <section id="basic-vertical-layouts">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error )
                        <li> {{$error}}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
                </div>
                @endif 
         <div class="row">
           <div class="col-md-6 col-12 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">POST CREATE</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="" method="POST"  enctype ="multipart/form-data" action="{{action('CreatepostController@store')}}">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control" name="title" placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="subtitle">Sub Title </label>
                                            <input type="text" id="subtitle" class="form-control" name="subtitle" placeholder="Subtitle">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <label for="attachment1">Attachment-1</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="attachment1" name="attachment1" >
                                                <label class="custom-file-label" for="attachment1">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <label for="attachment2">Attachment-2</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="attachment2" name="attachment2">
                                                <label class="custom-file-label" for="attachment2">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <label for="attachment3">Attachment-3</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="attachment3"  name="attachment3">
                                                <label class="custom-file-label" for="attachment3">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <label for="description">Description</label>
                                        <fieldset class="form-label-group">
                                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="description"></textarea>
                                        
                                        </fieldset>
                                    </div>
                                   
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"> <i class="feather icon-edit-1"></i>   POST</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
         {{--post card  --}}
        
       @if (count ($addposts)>0)
         @foreach ($addposts as $addpost )
      
         <div class="col-md-6 col-12 ">
         <div class="card">
          
            <div class="card-body">
                {{$addposts->links()}}
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <div class="avatar mr-1">
                        <img src="upload/{{ Auth::user()->Profile }}" alt="avtar img holder" height="45" width="45">
                    </div>
                    <div class="user-page-info">
                        <h6 class="mb-0"> {{ Auth::user()->name }}</h6>
                        <span class="font-small-2">{{$addpost->created_at}}</span>
                    </div>
                    <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
                </div>
                <h5> {{$addpost->title}} </h5><hr>
                <br>
                <h6>{{$addpost->subtitle}}</h6>
                <p>{{$addpost->description}}</p>
                <img class="img-fluid rounded-sm mb-2" src="storage/students/posts/{{$addpost->attachment1}}" alt="avtar img holder" height="300"  width="450">
                <div class="d-flex justify-content-start align-items-center mb-1">
                   
                </div>
            </div>
            </div>
        </div>
      {{--    <div class="col-md-5 col-12 ">
            <div class="card" style="height: 600px;">
                <div class="card-header mb-1">
                    <h4 class="card-title">Events</h4>
                   
                </div>
                <div class="card-content " style="padding:5%">
                    
                    <h5> {{$addevent->title}} </h5><hr>
                    <br>
                    <h6>{{$addevent->subtitle}}</h6>
                    <br>
                    <img style="width:50%  " src="storage/attachment1/{{$addevent->attachment1}}"  alt="image">                 
                       <div class="card-body">
                        <p class="card-text">{{$addevent->description}}</p>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <span class="float-left">posted:{{$addevent->created_at}}</span>
                   {{--  <span class="float-right">
                        <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                    </span> --}}
               {{--  </div>
            </div>
         </div> --}} 
          @endforeach
         @else 
         <p>NO POSTS FOUND</p>
         @endif 
         </section>
    </div>
    </div>
</div>

@endsection
