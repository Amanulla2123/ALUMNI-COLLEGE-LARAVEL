@extends('admin.adlayout')

@section('content')


<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

      <h4>VIEW POST</h4>
      @if (count ($data['posts'])>0)
      @foreach ($data['posts'] as $post )
      <div class="col-md-6 col-12  offset-md-2">
      <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar mr-1">
                    <img src="upload/{{$post->Profile}}" alt="avtar img holder" height="45" width="45">
                </div>
                <div class="user-page-info">
                <h6 class="mb-0">{{$post->name}} </h6>
                <span class="font-small-2">{{$post->created_at}}</span>
                </div>
                <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
            </div>
            <h5>{{$post->title}}</h5>
            <h6>{{$post->subtitle}}</h6>
            <p>{{$post->description}}</p>
            <img class="img-fluid rounded-sm mb-2" src="storage/students/posts/{{$post->attachment1}}" alt="img "  height="300"  width="450">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <a href="admin/approve/{{$post->id}}" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light"><i class="fa fa-check"></i>Approve</a>
           
             <form action="{{action('ViewpostController@destroy', $post->id)}}"  method ="POST"   > 
              {{csrf_field()}}  
              <input type="hidden"    name="_method"  value="DELETE" >
                     <button type="submit" class ="btn btn-outline-danger mr-1 mb-1 waves-effect waves-light"><i class="fa fa-times"></i>Decline</button>
               </form>
        </div>
       </div>
      </div>
      </div>
      @endforeach
               
   @else 
     <p> no post found</p>
   @endif 
    </div>
  </div>
@endsection