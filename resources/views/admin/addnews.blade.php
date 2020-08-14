@extends('admin.adlayout')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      
        <div class="content-body">
        
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
             <div class="col-md-7 col-12 ">
              <div class="card">
                <div class="card-header">
                    <h4 class="card-title">News Update</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                            
                         
                        <form class="forms-sample" method="POST"  enctype ="multipart/form-data" action="{{action('AddnewsController@store')}}">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">News Title</label>
                                            <input type="text" id="title" class="form-control" name="title" placeholder="Event title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="subtitle">Sub Title </label>
                                            <input type="text" id="subtitle" class="form-control" name="subtitle" placeholder="Event title">
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
                                        <button type="submit" class="btn btn-primary">Add News</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
               </div>
                @if (count ($addnews)>0)
                @foreach ($addnews as $addnews )
                <div class="col-md-5 col-12 ">
                <div class="card" style="height: 600px;">
                    <div class="card-header mb-1">
                    <h4 class="card-title">News</h4>
                  
               </div>
               <div class="card-content " style="padding:5%">
                   
                   <h5> {{$addnews->title}} </h5><hr>
                   <br>
                   <h6>{{$addnews->subtitle}}</h6>
                   <br>
                   <img style="width:50%  " src="storage/attachmentnews/{{$addnews->attachment1}}"  alt="image">                 
                      <div class="card-body">
                       <p class="card-text">{{$addnews->description}}</p>
                   </div>
               </div>
               <div class="card-footer text-muted">
                   <span class="float-left">posted:{{$addnews->created_at}}</span>
                  {{--  <span class="float-right">
                       <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                   </span> --}}
               </div>
                </div>
                </div>
                @endforeach
                @else 
                <p> no data found</p>
               @endif
            </div>
        </div>
    </div>
</div>

@endsection