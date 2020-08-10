<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>REGISTRATION</title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
   <link rel="stylesheet" href="https://mojoaxel.github.io/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />

    <!-- BEGIN: Vendor CSS-->
     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css">
     <link rel="stylesheet" type="text/css" href="assets/vendors/css/pickers/pickadate/pickadate.css">
     <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class=" col-xl-12 col-12 col-lg-12 " >
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-5 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="assets/images/pages/register.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h3 class="mb-0">Create Account</h3>
                                            </div>
                                        </div>
                                        <h5 class="px-2">Personal Details</h5>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="index.html">
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" placeholder="Full Name" required>
                                                        <label for="inputName">Full Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                    <fieldset class="form-label-group">
                                                        <h6>Nationality </h6>
                                                        <select class="selectpicker countrypicker" data-flag="true"></select>
                                                    </fieldset>
                                                    </fieldset>
                                                    <div class="form-label-group">
                                                        <input type="number" id="contactno" class="form-control" placeholder="Contact No" name="contactno">
                                                        <label for="contactno">Contact No</label>
                                                    </div>
                                                    <fieldset class="form-label-group">
                                                        <h6>Country of Residence  </h6>
                                                        <select class="selectpicker countrypicker" data-flag="true"></select>
                                                    </fieldset>
                                                
                                                    <div class="form-label-group">
                                                        <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                                        <label for="city-column">City</label>
                                                    </div>
                                                    <h5>Connection with PACE GROUP </h5>
                                                    <fieldset class="form-group">
                                                        <select class="custom-select" id="customSelect">
                                                            <option selected>Schoolname</option>
                                                            <option value="IT">it</option>
                                                            <option value="Blade Runner">Blade Runner</option>
                                                            <option value="Thor Ragnarok">Thor Ragnarok</option>
                                                        </select>
                                                     
                                                    </fieldset>
                                                    <div class="form-label-group">
                                                        <input type="text" id="adnumber" class="form-control" placeholder="Admission number" name="Admission number">
                                                        <label for="Admission number">Admission number</label>
                                                    </div>
                                                    <p>Year of Study </p>
                                                    <div class="form-label-group" id="date_5">
                                                      
                                                        <div class="input-daterange input-group" id="datepicker">
                                                            <form>
                                                                <input type='text' class="form-control pickadate" />
                                                            
                                                            <span class="input-group-addon p-l-10 p-r-30">to</span>
                                                            
                                                                <input type='text' class="form-control pickadate" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                         <h5 style="text-align:center">OR</h5>
                                                    <div class="form-label-group">
                                                        
                                                            <input type='text' class="form-control pickadate" />
                                                    
                                                        <label for="Passout year">Passout year</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required>
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                    </div>
                                                    <fieldset class="form-group">
                                                        <label for="basicInputFile">Profile Pic</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </fieldset>
                                             
                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://mojoaxel.github.io/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/js/core/app-menu.js"></script>
    <script src="assets/js/core/app.js"></script>
    <script src="assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>