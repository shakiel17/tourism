<!-- Header Start -->
 <?php
 if($background){
    $back=" style='background:linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)),url(data:image/jpg;charset=utf8;base64,".base64_encode($background['images']).") no-repeat; background-size:cover; '";
    $name=$background['companyname'];
    $desc=$background['description'];
    $address=$background['address'];
    $contactno=$background['contactno'];
    $email=$background['email'];
    $facebook=$background['facebook'];
    $location=$background['location'];
 }else{
    $back="";
    $name="";
    $desc="";
    $address="";
    $contactno="";
    $email="";
    $location="";
    $facebook="";
 }
 ?>
        <div class="container-fluid bg-breadcrumb"<?=$back;?>>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4"><?=$name;?></h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="<?=base_url();?>" class="btn btn-warning btn-sm text-white"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active text-white">My Gallery</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid gallery py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Gallery</h5>
                <h1 class="mb-4"><?=$name;?></h1>
                <p class="mb-0" style="text-align:justify;"><?=$desc;?></p>
            </div>
            <div class="tab-class text-center">                
                <div class="tab-content"> 
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                            <span class="text-dark" style="width: 150px;"><i class="fa fa-image"></i> Gallery</span>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                                <span class="text-dark" style="width: 150px;"><i class="fa fa-map"></i> Get Location</span>
                            </a>
                        </li>
                    </ul>
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">                                      
                        <div class="row g-2">
                            <?php
                            // $result=$this->Tourism_model->getStablishmentGallery($item['company_id']);
                            foreach($gallery as $rw){
                            ?>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($rw['images']);?>" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2"><?=$rw['companyname'];?></h5>                                            
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="data:image/jpg;charset=utf8;base64,<?=base64_encode($rw['images']);?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="GalleryTab-2" class="tab-pane fade show p-0">                                      
                        <div class="row g-2">                            
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <!-- <div class="gallery-item h-100"> -->
                                    
                                        <?=$rw['location'];?>
                                    
                                <!-- </div> -->
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- About End -->
          <div class="container-fluid subscribe py-5"<?=$back;?>>
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Where I can be located?</h5>
                    <h1 class="text-white mb-4">Our Contact</h1>
                    <p class="text-white mb-5" style="text-align:justify;">
                            Address: <?=$address;?><br>
                            Contact No.: <?=$contactno;?><br>
                            Email: <?=$email;?><br>
                            Facebook: <a href="<?=$facebook;?>" style="color:white; text-decoration: underline;" target="_blank">View Profile</a><br>
                    </p>
                    <!-- <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div> -->
                </div>
            </div>
        </div>        