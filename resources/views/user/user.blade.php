@extends('user.uslayout')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Profile</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div id="user-profile">
                <div class="row">
                    <div class="col-12">
                        <div class="profile-header mb-2">
                            <div class="relative">
                                <div class="cover-container">
                                    <img class="img-fluid bg-cover rounded-0 w-100" src="assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                </div>
                                <div class="profile-img-container d-flex align-items-center justify-content-between">
                                    <img src="assets/images/profile/user-uploads/user-11.jpg" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                    <div class="float-right">
                                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                            <i class="feather icon-edit-2"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                            <i class="feather icon-settings"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                <nav class="navbar navbar-expand-sm w-100 pr-0">
                                    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                            <li class="nav-item px-sm-0">
                                                <a href="#" class="nav-link font-small-3">Timeline</a>
                                            </li>
                                            <li class="nav-item px-sm-0">
                                                <a href="#" class="nav-link font-small-3">About</a>
                                            </li>
                                            <li class="nav-item px-sm-0">
                                                <a href="#" class="nav-link font-small-3">Photos</a>
                                            </li>
                                            <li class="nav-item px-sm-0">
                                                <a href="#" class="nav-link font-small-3">Friends</a>
                                            </li>
                                            <li class="nav-item px-sm-0">
                                                <a href="#" class="nav-link font-small-3">Videos</a>
                                            </li>
                                            <li class="nav-item px-sm-0">
                                                <a href="#" class="nav-link font-small-3">Events</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="profile-info">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            @if (count ($data['posts'])>0)
                            @foreach ($data['posts'] as $post )  
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-1">
                                            <img src="assets/images/profile/user-uploads/user-01.jpg" alt="avtar img holder" height="45" width="45">
                                        </div>
                                        <div class="user-page-info">
                                            <p class="mb-0">{{$post->name}}</p>
                                            <span class="font-small-2">{{$post->created_at}}</span>
                                        </div>
                                        <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <h5>{{$post->title}}</h5>
                                    <h6>{{$post->subtitle}}</h6>
                                    <p>{{$post->description}}</p>
                                    <img class="img-fluid rounded-sm mb-2" src="storage/students/posts/{{$post->attachment1}}" alt="img "  height="300"  width="670">

                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="d-flex align-items-center">
                                            <i class="feather icon-heart font-medium-2 mr-50"></i>
                                            <span>145</span>
                                        </div>
                                        <div class="ml-2">
                                            <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Alberto Glotzbach" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="George Nordic" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li class="d-inline-block pl-50">
                                                    <span>+140 more</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="ml-auto d-flex align-items-center">
                                            <i class="feather icon-message-square font-medium-2 mr-50"></i>77
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Kitty Allanson</h6>
                                            <span class="font-small-2">orthoplumbate morningtide naphthaline exarteritis</span>
                                        </div>
                                        <div class="ml-auto cursor-pointer">
                                            <i class="feather icon-heart mr-50"></i>
                                            <i class="feather icon-message-square"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-2">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Jeanie Bulgrin</h6>
                                            <span class="font-small-2">blockiness pandemy metaxylene speckle coppy</span>
                                        </div>
                                        <div class="ml-auto cursor-pointer">
                                            <i class="feather icon-heart mr-50"></i>
                                            <i class="feather icon-message-square"></i>
                                        </div>
                                    </div>
                                    <fieldset class="form-label-group mb-50">
                                        <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
                                        <label for="label-textarea">Add Comment</label>
                                    </fieldset>
                                    <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                                </div>
                            </div>
                            @endforeach
                            @else 
                            <p>NO POSTS</p>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-1">
                                            <img src="assets/images/profile/user-uploads/user-01.jpg" alt="avtar img holder" height="45" width="45">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Leeanna Alvord</h6>
                                            <span class="font-small-2">10 Dec 2018 at 5:35 AM</span>
                                        </div>
                                        <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
                                    </div>
                                    <p>Wafer I love brownie jelly bonbon tart. Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake.</p>
                                    <iframe src="https://www.youtube.com/embed/WALZwXyxpHQ" class="w-100 height-250"></iframe>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="d-flex  cursor-pointeralign-items-center">
                                            <i class="feather icon-heart font-medium-2 mr-50"></i>
                                            <span>269</span>
                                        </div>
                                        <div class="ml-2">
                                            <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Elicia Rieske" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Julee Rossignol" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Darcey Nooner" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Elicia Rieske" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li class="d-inline-block pl-50">
                                                    <span>+264 more</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="ml-auto d-flex align-items-center">
                                            <i class="feather icon-message-square font-medium-2 mr-50"></i>98
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Darcey Nooner</h6>
                                            <span class="font-small-2">I love cupcake danish jujubes sweet.</span>
                                        </div>
                                        <div class="ml-auto cursor-pointer">
                                            <i class="feather icon-heart mr-50"></i>
                                            <i class="feather icon-message-square"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-2">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Lai Lewandowski</h6>
                                            <span class="font-small-2">Wafer I love brownie jelly bonbon tart apple pie</span>
                                        </div>
                                        <div class="ml-auto cursor-pointer">
                                            <i class="feather icon-heart mr-50"></i>
                                            <i class="feather icon-message-square"></i>
                                        </div>
                                    </div>
                                    <fieldset class="form-label-group mb-50">
                                        <textarea class="form-control" id="label-textarea3" rows="3" placeholder="Add Comment"></textarea>
                                        <label for="label-textarea3">Add Comment</label>
                                    </fieldset>
                                    <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                                </div>
                            </div>
                        </div>
                        {{-- event display --}}
                        <div class="col-lg-4 col-12">
                             @if (count ($data['addevents'])>0)
                             @foreach ($data['addevents'] as $addevent )  
                                <div class="card" style="height: 600px;">
                                 <div class="card-header mb-1">
                                    <h4 class="card-title">Events</h4>
                                    {{$data['addevents']->links()}}
                                 </div>
                                 <div class="card-content " >
                                        <h5> {{$addevent->title}} </h5><hr>
                                        <br>
                                        <h6>{{$addevent->subtitle}}</h6>
                                        <br>      
                                    <div class="card-body">
                                            <img  style="width:280px" src="storage/attachment1/{{$addevent->attachment1}}"  alt="Card image cap"> 
                                           <p class="card-text">{{$addevent->description}}</p>
                                    </div>
                                 </div>
                                 <div class="card-footer text-muted">
                                       <span class="float-left">posted:{{$addevent->created_at}}</span>
                                      {{--  <span class="float-right">
                                           <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                       </span> --}}
                                   </div>
                               </div>
                               @endforeach
                            @else 
                            <p> no data found</p>
                            @endif
                            {{-- news display --}}
                            @if (count ($data['addnews'])>0)
                            @foreach ($data['addnews'] as $addnews )
                           
                            <div class="card" style="height: 600px;">
                                <div class="card-header mb-1">
                                <h4 class="card-title">News</h4>
                                </div>
                             <div class="card-content " style="padding:5%">
                                    <h5> {{$addnews->title}} </h5><hr>
                                    <br>
                                    <h6>{{$addnews->subtitle}}</h6>
                                    <br>
                                    <img style="width:280px  " src="storage/attachmentnews/{{$addnews->attachment1}}"  alt="image">                 
                                   <div class="card-body">
                                   <p class="card-text">{{$addnews->description}}</p>
                                   <hr>
                                    <span class="float-left">posted:{{$addnews->created_at}}</span>
                                   </div>
                                   
                             </div>
                              @endforeach
                              @else 
                              <p> no data found</p>
                              @endif
                         </div>
                        
                        <br>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Latest Photos</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-01.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-02.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-03.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-04.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-05.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-06.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-07.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-08.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                        <div class="col-md-4 col-6 user-latest-img">
                                            <img src="assets/images/profile/user-uploads/user-09.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>Suggestions</h4>
                                    <i class="feather icon-more-horizontal cursor-pointer"></i>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-5.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Carissa Dolle</h6>
                                            <span class="font-small-2">6 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-6.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Liliana Pecor</h6>
                                            <span class="font-small-2">3 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-7.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Isidra Strunk</h6>
                                            <span class="font-small-2">2 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-8.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Gerald Licea</h6>
                                            <span class="font-small-2">1 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-9.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Kelle Herrick</h6>
                                            <span class="font-small-2">1 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-10.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Cesar Lee</h6>
                                            <span class="font-small-2">1 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-11.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">John Doe</h6>
                                            <span class="font-small-2">1 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center mb-2">
                                        <div class="avatar mr-50">
                                            <img src="assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
                                        </div>
                                        <div class="user-page-info">
                                            <h6 class="mb-0">Tonia Seabold</h6>
                                            <span class="font-small-2">1 Mutual Friends</span>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                    </div>
                                    <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-primary block-element mb-1">Load More</button>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>
@endsection