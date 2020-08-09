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
    <title>Form Layouts - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="ts/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
   

    <!-- BEGIN: Content-->
  
       <div class= "container" style="padding-top: 5%"> 
        
        <div class="content-wrapper">
           
            <div class="content-body">
        
               
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Registration</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                                            <label for="first-name-column">First Name</label>
                                                        </div>
                                                    </div>
                                                         <div class="col-md-6 col-12">
                                                            <fieldset class="form-group">
                                                                <select class="custom-select" id="customSelect">
                                                                    <option selected>Nationality</option>
                                                                    <option value="IT">IT</option>
                                                                    <option value="Blade Runner">Blade Runner</option>
                                                                    <option value="Thor Ragnarok">Thor Ragnarok</option>
                                                                </select>
                                                            </fieldset>
                                                            </div>
                                                       
                                                    
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="adnumber" class="form-control" placeholder="Admission number" name="Admission number">
                                                            <label for="Admission number">Admission number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="number" id="contactno" class="form-control" placeholder="Contact No" name="contactno">
                                                            <label for="contactno">Contact No</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                                            <label for="country-floating">Country</label>
                                                        </div>
                                                    </div><div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                                            <label for="city-column">City</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="country-floating">Connection with PACE GROUP</label>
                                                            <fieldset class="form-group">
                                                                <select class="custom-select" id="customSelect">
                                                                    <option selected>Schoolname</option>
                                                                    <option value="IT">it</option>
                                                                    <option value="Blade Runner">Blade Runner</option>
                                                                    <option value="Thor Ragnarok">Thor Ragnarok</option>
                                                                </select>
                                                             
                                                            </fieldset>
                                                        </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                         
                                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                                            <label for="email-id-column">Email</label>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <div class="controls">
                                                                <input type="password" name="password" class="form-control" placeholder="Your Password" required data-validation-required-message="The password field is required" minlength="6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <div class="controls">
                                                                <input type="password" name="con-password" class="form-control" placeholder="Confirm Password" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
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
                <!-- // Basic Floating Label Form section end -->
             <div>
            </div>
        </div>
  
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
       
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/js/core/app-menu.js"></script>
    <script src="assets/js/core/app.js"></script>
    <script src="assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>