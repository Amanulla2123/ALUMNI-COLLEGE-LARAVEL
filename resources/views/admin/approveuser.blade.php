@extends('admin.adlayout')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="main-panel">
            <div class="page-header">
                <h3 class="page-title">REGISTERD USER</h3>
            </div>
            {{$approves->links()}}
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-40">
             <table class="table  table-striped table-earning">
              <thead class="thead-light">
                  <tr>
                    <th><strong>USERID</strong></th>
                    <th><strong>PROFILE</strong></th>
                    <th><strong>NAME</strong></th>
                    <th><strong>EMAILID</strong></th>
                    <th><strong>NATIONALITY</strong></th>
                    <th><strong>GENDER</strong></th>
                    <th><strong>COUNTRY OF RESIDENCE</strong></th> 
                    <th><strong>CONTACTNO</strong></th>
                    <th><strong>SCHOOL NAME</strong></th>
                    <th><strong>ADMISSION NUMBER</strong></th>
                    <th><strong>FROM YEAR</strong></th>
                    <th><strong>TO YEAR</strong></th>
                    <th><strong>PASSOUT YEAR</strong></th>
                    <th><strong>STATUS</strong></th>
                    <th><strong>ACTION</strong></th>
                  </tr>
                </thead>
                <tbody>
           @if (count ($approves)>0)
             @foreach ($approves as $approve )
                  <tr>
                    <td>{{$approve->userid}}</td>
                    <td> <img style="width:80px " src="upload/{{$approve->Profile}}"  alt="image"></td>
                    <td>{{$approve->name}}</td>
                    <td>{{$approve->email}}</td>
                    <td>{{$approve->Nationality}}</td>   
                    <td>{{$approve->gender}}</td>
                    <td>{{$approve->Countryofresidence}}</td> 
                    <td>{{$approve->Contactno}}</td>  
                    <td>{{$approve->Schoolname}}</td>
                    <td>{{$approve->Admissionnumber}}</td>
                    <td>{{$approve->Fromyear}}</td>  
                    <td>{{$approve->Toyear}}</td>  
                    <td>{{$approve->Passoutyear}}</td>  
                    <td>
                      @if($approve->role==0)
                        Requested
                      @endif
                      @if($approve->role==3)
                        Approved
                      @endif
                     
                    </td>
                    <td>
                      @if($approve->role==0)
                      <a href="/admin/approveuser/{{$approve->userid}}" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-user-check">Approve</a></i>
                      @endif

                      <form action="{{action('ApproveuserController@destroy', $approve['userid'])}}"  method ="POST"   > 
                      {{csrf_field()}}  
                      <input type="hidden"    name="_method"  value="DELETE" >
                             <button type="submit" class ="btn btn-outline-danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-user-x"></i>REJECT</button>
                       </form>
                    </td>
                    </tr>
                 </tbody>
               </div>
            </div>
           @endforeach
              </table>
             @else 
               <p> no data found</p>
             @endif
    </div>
</div>
@endsection