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
                            $x=0;
                            foreach($gallery as $rw){
                                if($x % 2 == 0){
                            ?>
                            <div class="container-fluid about py-3">
                                <div class="container py-2">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-lg-5">
                                            <div class="gallery-item h-60" style="border: 2px solid; border-color: transparent #13357B transparent #13357B;">
                                                <?php
                                                        $background="<img src='data:image/jpg;charset=utf8;base64,".base64_encode($rw['images'])."' class='img-fluid w-60 h-60' alt=''>";
                                                ?>     
                                                <?=$background;?>                       
                                                <div class="gallery-plus-icon">
                                                    <a href="data:image/jpg;charset=utf8;base64,<?=base64_encode($rw['images']);?>" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div style="text-align:justify;" class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">                                            
                                            <p class="mb-4"><?=nl2br($rw['info']);?></p>                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }else{
                                    ?>
                                    <div class="container-fluid about py-3">
                                <div class="container py-2">
                                    <div class="row g-5 align-items-center">
                                         <div style="text-align:right;" class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">                                            
                                            <p class="mb-4"><?=nl2br($rw['info']);?></p>                        
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="gallery-item h-60" style="border: 2px solid; border-color: transparent #13357B transparent #13357B;">
                                                <?php
                                                        $background="<img src='data:image/jpg;charset=utf8;base64,".base64_encode($rw['images'])."' class='img-fluid w-60 h-60' alt=''>";
                                                ?>     
                                                <?=$background;?>    
                                                <div class="gallery-plus-icon">
                                                    <a href="data:image/jpg;charset=utf8;base64,<?=base64_encode($rw['images']);?>" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                                </div>                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <?php
                                }
                            $x++;
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
         <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <?php
                    foreach($feedback as $feed){
                    ?>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">
                                <?=$feed['fb_description'];?>
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="<?=base_url('design/assets/user/img/testimonial-1.jpg');?>" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0"><?=$feed['fb_name'];?></h5>
                            <p class="mb-0"><?=date('m/d/Y',strtotime($feed['fb_datearray']));?> | <?=date('h:i A',strtotime($feed['fb_timearray']));?></p>
                            <div class="d-flex justify-content-center">
                                <?php
                                $w=$feed['fb_rate'];
                                $x=0;
                                while($x < $w){
                                ?>
                                <i class="fas fa-star text-primary"></i>
                                <?php
                                $x++;
                                }
                                ?>                                
                            </div>
                        </div>
                    </div> 
                    <?php
                    }
                    ?>                     
                </div>
            </div>
        </div>

        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Feedback</h5>
                    <h1 class="mb-0">Tell me about your experience!!</h1>
                </div>
                <div class="row g-5 align-items-center">                   
                    <div class="col-lg-12">                        
                        <form action="<?=base_url('save_feedback');?>" method="POST">
                            <input type="hidden" name="company_id" value="<?=$customer_id;?>">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="email">Rate Me</label>                                 
                                        <div class="rating" role="radiogroup" aria-label="Star rating">
                                            <div class="stars">
                                            <input type="radio" id="star5" name="fb_rate" value="5">
                                            <label for="star5"><svg viewBox="0 0 24 24"><path d="M12 .587l3.668 7.431L23.6 9.75l-5.8 5.656L19.335 24 12 19.897 4.665 24l1.534-8.594L.4 9.75l7.932-1.732z"/></svg></label>

                                            <input type="radio" id="star4" name="fb_rate" value="4">
                                            <label for="star4"><svg viewBox="0 0 24 24"><path d="M12 .587l3.668 7.431L23.6 9.75l-5.8 5.656L19.335 24 12 19.897 4.665 24l1.534-8.594L.4 9.75l7.932-1.732z"/></svg></label>

                                            <input type="radio" id="star3" name="fb_rate" value="3">
                                            <label for="star3"><svg viewBox="0 0 24 24"><path d="M12 .587l3.668 7.431L23.6 9.75l-5.8 5.656L19.335 24 12 19.897 4.665 24l1.534-8.594L.4 9.75l7.932-1.732z"/></svg></label>

                                            <input type="radio" id="star2" name="fb_rate" value="2">
                                            <label for="star2"><svg viewBox="0 0 24 24"><path d="M12 .587l3.668 7.431L23.6 9.75l-5.8 5.656L19.335 24 12 19.897 4.665 24l1.534-8.594L.4 9.75l7.932-1.732z"/></svg></label>

                                            <input type="radio" id="star1" name="fb_rate" value="1">
                                            <label for="star1"><svg viewBox="0 0 24 24"><path d="M12 .587l3.668 7.431L23.6 9.75l-5.8 5.656L19.335 24 12 19.897 4.665 24l1.534-8.594L.4 9.75l7.932-1.732z"/></svg></label>
                                            </div>
                                            <!-- <div class="value" id="selectedValue">—</div> -->
                                        </div>                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-2" name="fb_name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-1" name="fb_description" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Feedback</label>
                                    </div>
                                </div>                                                                                                                               
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Feedback</button>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>

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