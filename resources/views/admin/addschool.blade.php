@extends('admin.adlayout')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

 <!-- Add rows table -->
 <div class="main-panel">
 
            <div class="page-header">
                <h3 class="page-title">REGISTERD SCHOOL</h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#myModal">ADD SCHOOL</button></li>
                </ol>
                </nav>
            </div>
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

          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-40">
             <table class="table  table-striped table-earning">
                <thead>
                  <tr>
                    <th><strong>ID</strong></th>
                    <th><strong>LOGO</strong></th>
                    <th><strong>SCHOOL NAME</strong></th>
                    <th><strong>LOCATION</strong></th>
                    <th><strong>STARTING YEAR</strong></th>
                  </tr>
                </thead>
                <tbody>
           @if (count ($addschools)>0)
             @foreach ($addschools as $addschool )
                  <tr>
                   <td>{{$addschool->id}} </td>
                   <td> <img style="width:80px " src="storage/Logo/{{$addschool->Logo}}"  alt="image"></td>
                    <td>{{$addschool->Schoolname}}</td>
                    <td>{{$addschool->Location}}</td>
                    <td>{{$addschool->Startingyear}}</td>   
                    </tr>
                  
                </tbody>
               </div>
           </div>
           @endforeach
              </table>
            
             
             @else 
               <p> no data found</p>
             @endif
   
             <div class="container">
                <div class="md-col-8 sm-col-12 lg-col-8">
             <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-md " >
                      <div class="modal-content">
             
               <!-- Modal Header -->
                         <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                          </div>
                           
                        <form class="forms-sample" method="POST"  enctype ="multipart/form-data" action="{{action('AddschoolController@store')}}">
                          {{csrf_field()}}
               <!-- Modal body -->
                         <div class="modal-body"> 
                          <div class="form-group ">
                              <label for="Logo" class="col-md-4 col-form-label">Logo</label>
            
                              <div class="col-md-6">
                                  <input id="Logo" type="file"  name="Logo">
            
                              </div>
                          </div>
                         <div class="form-group">
                          <label>Schoolname</label>
                          <input type="name" class="form-control" name="Schoolname" placeholder="Schoolname">
                        </div>
                        <div class="form-group">
                          <label>Location</label>
                          <input type="text" class="form-control" name="Location" placeholder="Location">
                        </div>
                         <div class="form-group">
                          <label>Startingyear</label>
                          <input type="year" class="form-control" name="Startingyear" placeholder="Startingyear">
                        </div> 
                       
                         </div>
              <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                          <button type="submit" class="btn btn-success">Add School</button>
                        </div>
                       </form>
                     </div>
                   </div> 
                  </div>
                </div>
               </div> 
    
       </div>
 

 </div>
</div>


@endsection