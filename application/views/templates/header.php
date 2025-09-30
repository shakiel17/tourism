<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Tourism Management System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?=base_url('design/assets/user/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
        <link href="<?=base_url('design/assets/user/lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?=base_url('design/assets/user/css/bootstrap.min.css');?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=base_url('design/assets/user/css/style.css');?>" rel="stylesheet">        
    </head>
    <style>
        :root{
        --star-size: 36px;
        --star-color: #e0e0e0;
        --star-active: #f6b400;
        font-family: "Poppins", Arial, sans-serif;
        }
        .rating{display:flex;align-items:center}
        .rating input{display:none}
        .stars{display:flex;flex-direction:row-reverse;gap:8px;cursor:pointer}
        .stars label{width:var(--star-size);height:var(--star-size);display:inline-block}
        .stars label svg{width:100%;height:100%;fill:var(--star-color);transition:fill .2s ease}

        /* Hover effect */
        .stars label:hover svg,
        .stars label:hover ~ label svg{
        fill:var(--star-active);
        }

        /* Checked effect */
        .rating input:checked ~ label svg,
        .rating input:checked ~ label ~ label svg{
        fill:var(--star-active);
        }
        @media (max-width:420px){:root{--star-size:30px}}
    </style>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->