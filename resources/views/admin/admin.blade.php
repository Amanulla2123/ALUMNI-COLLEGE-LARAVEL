@extends('admin.adlayout')

@section('content')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                       
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div id="user-profile">
                   
                    <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                @if (count ($data['posts'])>0)
                                @foreach ($data['posts'] as $post )  
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="upload/{{$post->Profile}}" alt="avtar img holder" height="45" width="45">
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
                                                <?php $likeme=0; ?>
                                                @foreach ($data['likes'] as $like )
                                                
                                                @if($like->postId == $post->id && $like->likeduserId == Auth::user()->id )
                                                <a  id="like{{$post->id}}" class="like" > <i class="fa fa-thumbs-o-up font-large-1 mr-50 text-danger"></i>
                                                </a>
                                                <?php $likeme=1;?>
                                                <script>
                                                     
                                                    $('#like{{$post->id}}').on("click",function(){  
                                                      window.location.href = '/user/user/{{$post->id}}';
                                                    });
                                                    </script>
                                                    @endif
                                                    @endforeach
                                                    @if($likeme==0)
                                                    <a  id="like{{$post->id}}" class="like" > <i class="fa fa-thumbs-o-up font-large-1 mr-50"></i>
                                                    </a>
                                                    <script>
                                                         
                                                        $('#like{{$post->id}}').on("click",function(){  
                                                          window.location.href = '/user/user/{{$post->id}}';
                                                        });
                                                        </script>
    
                                                    @endif
                                                
                                                <?php $count=0;?>
                                                <span style="color:red">
                                                    @foreach($data['likes'] as $like)
                                                        @if($post->id==$like->postId)
                                                            <?php $count++;?>
                                                            @endif
                                                           @endforeach
                                                           {{$count}} 
                                                           &nbsp;</span><span style="color:blue"> LIKES</span>
                                                 </div>
                                            <div class="ml-2">
                                                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                    <?php $flag=0;?>
                                                    @foreach($data['likes'] as $like)
                                                    @if($post->id==$like->postId)
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="{{$like->name}}" class="avatar pull-up">
                                                        <img class="media-object rounded-circle" src="upload/{{$like->Profile}}" alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <?php $flag++;?>
                                                    @endif
                                                    @endforeach
                                                    <li class="d-inline-block pl-50">
                                                        <span>&nbsp;   {{$flag}} </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        {{-- comment section --}}
                                        <?php $x = 0; ?>
                                        @foreach ($data['comment'] as $comment ) 
                                        @if ($post->id == $comment->postId) 
                                        <?php if($x == 4) break; ?>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="upload/{{$comment->Profile}}" alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0"> {{$comment->name}}</h6>
                                            <span class="font-small-2">{{$comment->comment}}</span>
                                            </div>
                                            {{--  <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div> --}}
                                            <?php $x++; ?>
                                        </div>
                                        @else 
                                        <p></p>
                                        @endif
                                        @endforeach
                                       
                                        <form class="" method="post"  enctype ="multipart/form-data" action="{{action('UserController@store', $post->id)}}">
                                            {{csrf_field()}}
                                        <fieldset class="form-label-group mb-50">
                                            <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Add Comment"></textarea>
                                            <label for="label-textarea">Add Comment</label>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary"> <i class="feather icon-edit-1"></i>    POST COMMENT</button>
                                    </form>
                                    </div>
                                </div>
                                @endforeach
                                @else 
                                <p>NO POSTS</p>
                                @endif
                       
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="card" style="height: 600px;">
                                    <div class="card-header mb-1">
                                       <h4 class="card-title">Events</h4>  
                                    </div>
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                               <ol class="carousel-indicators">
                                                <?php $start=0;?>
                                                @foreach ($data['addevents'] as $addevent )  
                                                        @if($start==0)
                                                        
                                                            <li data-target="#carousel-example-caption" data-slide-to=" {{$addevent->id}} " class="active"></li>
                                                            <?php $start++;?>
                                                        
                                                        @else
                                                        
                                                           <li data-target="#carousel-example-caption" data-slide-to=" {{$addevent->id}} " ></li>
                                                        
                                                        @endif
                                                 @endforeach
                                                </ol>
                                               <div class="carousel-inner" role="listbox">
                                                 <?php $sample=0;?>
                                                 @foreach ($data['addevents'] as $addevent )  
                                                    @if($sample==0)
                                                    
                                                        <div class="carousel-item active">
                                                            <h5> {{$addevent->title}} </h5><hr>
                                                            <br>
                                                            <h6>{{$addevent->subtitle}}</h6>
                                                            <br>
                                                            <img  width="300px" height="200px" src="storage/attachment1/{{$addevent->attachment1}}"  alt="Card image cap"> 
                                                            <p class="card-text">{{$addevent->description}}</p>
                                                              
                                                            <div class="card-footer text-muted">
                                                                <span class="float-left">posted:{{$addevent->created_at->format('d-m-Y')}}</span>
                                                                </div>
                                                            <div class="carousel-caption">
                                                              
                                                            
                                                           </div>
                                                      </div>
                                                      <?php $sample++;?>
                                                    
                                                    @else
                                                              <div class="carousel-item "> 
                                                                <h5> {{$addevent->title}} </h5><hr>
                                                                <br>
                                                                <h6>{{$addevent->subtitle}}</h6>
                                                                <br>
                                                                <img  width="300px" height="200px" src="storage/attachment1/{{$addevent->attachment1}}"  alt="Card image cap"> 
                                                                <p class="card-text">{{$addevent->description}}</p>
                                                                  
                                                                <div class="card-footer text-muted">
                                                                    <span class="float-left">posted:{{$addevent->created_at->format('d-m-Y')}}</span>
                                                                    </div>
                                                                <div class="carousel-caption">
                                                                  
                                                                
                                                               </div>
                                                        </div>
                                                    @endif
                                                 @endforeach
                                               </div>
                                               <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                   <span class="sr-only">Previous</span>
                                               </a>
                                               <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                   <span class="sr-only">Next</span>
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                 
                                   {{-- news display --}}
                               {{-- news display --}}
                           <div class="card" style="height: 600px;">
                            <div class="card-header mb-1">
                               <h4 class="card-title">News</h4>  
                            </div>
                           <div class="card-content">
                               <div class="card-body">
                                   <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                       <ol class="carousel-indicators">
                                        <?php $even=0;?>
                                        @foreach ($data['addnews'] as $addnews )  
                                                @if($even==0)
                                                
                                                    <li data-target="#carousel-example-caption" data-slide-to=" {{$addnews->id}} " class="active"></li>
                                                    <?php $even++;?>
                                                
                                                @else
                                                
                                                   <li data-target="#carousel-example-caption" data-slide-to=" {{$addnews->id}} " ></li>
                                                
                                                @endif
                                         @endforeach
                                        </ol>
                                       <div class="carousel-inner" role="listbox">
                                         <?php $sample1=0;?>
                                         @foreach ($data['addnews'] as $addnews )  
                                            @if($sample1==0)
                                            
                                                <div class="carousel-item active">
                                                    <h5> {{$addnews->title}} </h5><hr>
                                                    <br>
                                                    <h6>{{$addnews->subtitle}}</h6>
                                                    <br>
                                                    <img  width="300px" height="200px" src="storage/attachmentnews/{{$addnews->attachment1}}"  alt="Card image cap"> 
                                                    <p class="card-text">{{$addnews->description}}</p>
                                                      
                                                    <div class="card-footer text-muted">
                                                        <span class="float-left">posted:{{$addnews->created_at->format('d-m-Y')}}</span>
                                                        </div>
                                                    <div class="carousel-caption">
                                                      
                                                    
                                                   </div>
                                              </div>
                                              <?php $sample1++;?>
                                            
                                            @else
                                                      <div class="carousel-item "> 
                                                        <h5> {{$addnews->title}} </h5><hr>
                                                    <br>
                                                    <h6>{{$addnews->subtitle}}</h6>
                                                    <br>
                                                    <img  width="300px" height="200px" src="storage/attachmentnews/{{$addnews->attachment1}}"  alt="Card image cap"> 
                                                    <p class="card-text">{{$addnews->description}}</p>
                                                      
                                                    <div class="card-footer text-muted">
                                                        <span class="float-left">posted:{{$addnews->created_at->format('d-m-Y')}}</span>
                                                        </div>
                                                    <div class="carousel-caption">
                                                      
                                                    
                                                   </div>
                                                </div>
                                            @endif
                                         @endforeach
                                       </div>
                                       <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                           <span class="sr-only">Previous</span>
                                       </a>
                                       <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                           <span class="sr-only">Next</span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                               </div>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                       
                    </section>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
   