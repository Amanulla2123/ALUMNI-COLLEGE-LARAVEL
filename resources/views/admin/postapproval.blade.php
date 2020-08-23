@extends('admin.adlayout')

@section('content')


<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="main-panel">
            <div class="page-header">
                <h3 class="page-title"> APPROVAL</h3>
               
            </div>
           {{--  {{$datas->links()}} --}}
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-40">
             <table class="table  table-striped table-earning">
              <thead class="thead-light">
                  <tr>
                              <th><strong>POSTID</strong></th>
                              <th><strong>NAME</strong></th>
                              <th><strong>PROFILE</strong></th> 
                              <th><strong>POST TITLE</strong></th>
                              <th><strong>SCHOOL NAME</strong></th> 
                              <th><strong>VIEW</strong></th>
                  </tr>
                </thead>
                <tbody>
                 @if (count ($data)>0)
                  @foreach ($data as $data )
                      <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->name}}</td>
                      <td> <img style="width:80px " src="upload/{{$data->Profile}}"  alt="image"></td>  
                      <td>{{$data->title}}</td>
                      <td>{{$data->Schoolname}}</td>
                       <td><a href="admin.viewpost.{{$data->id}}" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="fa fa-eye"></i></a></td>
                     
           {{--            <td> <button type="submit" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light"data-toggle="modal" data-target="#myModal" ><i class="feather icon-user-eye"></i>VIEW</button>
                        <div class="container">
                          <div class="md-col-8 sm-col-12 lg-col-8">
                       <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                              <div class="modal-dialog modal-md " >
                                <div class="modal-content">
                         <!-- Modal Header -->
                                   <div class="modal-header">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                      <div class="avatar mr-1">
                                          <img src="upload/{{$data->Profile}}" alt="avtar img holder" height="45" width="45">
                                      </div>
                                      <div class="user-page-info">
                                          <p class="mb-0">{{$data->name}}</p>
                                          <span class="font-small-2">{{$data->created_at}}</span>
                                      </div>
                                      <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
                                  </div>
                                      <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                     
                                  
                         <!-- Modal body -->
                                   <div class="modal-body"> 
                                    <h5> {{$data->title}}</h5>
                                    <h6> {{$data->subtitle}}</h6>
                                    <p>{{$data->description}}</p>
                                    <img class="img-fluid card-img-top rounded-sm mb-2" src="storage/students/posts/{{$data->attachment1}}" alt="avtar img holder">
                                   </div>
                        <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                                    <button type="submit" class="btn btn-success">APPROVE</button>
                                  </div>
                                 </form>
                               </div>
                             </div> 
                            </div>
                          </div>
                         </div> 
                      </td> --}}
                       {{--  <td><form action="{{action('datauserController@destroy', $data['userid'])}}"  method ="data"   > 
                      {{csrf_field()}}  
                      <input type="hidden"    name="_method"  value="DELETE" >
                             <button type="submit" class ="btn btn-outline-danger mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-user-x"></i>DECLINE</button>
                    
                       </form>
                   
                      </td> --}}

                    </tr>
                </tbody>
               </div>
           </div>
           @endforeach
              </table>             
             @else 
               <p>NO POST FOUND</p>
             @endif 
            
            </div>
          </div>
@endsection