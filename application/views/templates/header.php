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
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <style>            
            /* #app { display:flex; flex-direction:column; height:100%; } */
            header { padding:12px 16px; background:#0b63ce; color:white; display:flex; gap:12px; align-items:center; flex-wrap:wrap; }
            header h1 { font-size:16px; margin:0; }
            .controls { display:flex; gap:8px; margin-left:auto; align-items:center; flex-wrap:wrap; }
            .controls input[type="text"]{ padding:8px 10px; border-radius:6px; border:1px solid rgba(0,0,0,0.12); min-width:200px; }
            .controls button, .controls select{ padding:8px 10px; border-radius:6px; border:0; background:#fff;color:#0b63ce; cursor:pointer; font-weight:600; }
            main { display:flex; gap:12px; padding:12px; flex:1; align-items:stretch; }
            #map { flex:1; min-height:500px; border-radius:8px; overflow:hidden; box-shadow:0 8px 20px rgba(0,0,0,0.08); }            
            .field { margin-bottom:10px; }
            label{ display:block; font-size:13px; color:#444; margin-bottom:6px; }
            .value { background:#f7f7f8; padding:8px; border-radius:6px; font-family:monospace; }
            footer { padding:10px 16px; font-size:13px; color:#666; background:#fafafa; text-align:center; }
            .search-results { position:absolute; background:#fff; border:1px solid #ccc; border-radius:6px; max-height:200px; overflow:auto; z-index:1000; margin-top:40px; right:16px; width:250px; box-shadow:0 4px 8px rgba(0,0,0,0.1); }
            .search-results div { padding:6px 10px; cursor:pointer; }
            .search-results div:hover { background:#f0f0f0; }
            @media (max-width:840px){ main{ flex-direction:column; } aside{ width:100%; max-width:100%; } .controls input[type="text"]{ min-width:100%; } }
        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->