<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourism  Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url('design/assets/admin/img/favicon.ico');?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('design/assets/admin/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('design/assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css');?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('design/assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url('design/assets/admin/css/style.css');?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="<?=base_url('login');?>" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>STABLISHMENT PORTAL</h3>
                            </a>
                            <!-- <h3>Sign Up</h3> -->
                        </div>
                        <form action="<?=base_url('authenticate');?>" method="POST">                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword" name="username" placeholder="Username" required autocomplete="off">
                            <label for="floatingPassword">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required autocomplete="off">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a> -->
                        </div>                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                        </form>
                        <p class="text-center mb-0"><a href="<?=base_url();?>" class="btn btn-success">Back Home</a></p><br>
                        <?php
                        if($this->session->error){
                            ?>
                            <p class="alert alert-danger"><?=$this->session->error;?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url('design/assets/user/lib/easing/easing.min.js');?>"></script>
        <script src="<?=base_url('design/assets/user/lib/waypoints/waypoints.min.js');?>"></script>
        <script src="<?=base_url('design/assets/user/lib/owlcarousel/owl.carousel.min.js');?>"></script>
        <script src="<?=base_url('design/assets/user/lib/lightbox/js/lightbox.min.js');?>"></script>
        

        <!-- Template Javascript -->
        <script src="<?=base_url('design/assets/user/js/main.js');?>"></script>
    </body>

</html>