@extends('admin.adlayout')

@section('content')


<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
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
                    <div class="col-md-6 col-12 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add HOD/Teacher</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal"  method="POST"  enctype ="multipart/form-data" action="{{action('AddhodtechController@store')}}"  >
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>User Type</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left"> <fieldset class="form-group">
                                                                <select class="form-control" id="usertype" name="usertype">
                                                        
                                                                    <option value="hod">HOD</option>
                                                                    <option value="teacher">TEACHER</option>
                                                                </select>
                                                            </fieldset>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user-check"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>First Name</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="firstname" class="form-control" name="firstname" placeholder="First Name">
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-mail"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Mobile</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="number" id="mobile" class="form-control" name="mobile" placeholder="Mobile">
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-smartphone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Password</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Horizontal form layout section end -->

        </div>
    </div>
</div>

@endsection