            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $ismain=" active";
                        foreach($carousel as $item){
                            if($item['is_featured']==1){
                        ?>
                        <div class="carousel-item<?=$ismain;?>">
                            <img src='data:image/jpg;charset=utf8;base64,<?=base64_encode($item['image']);?>' class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore Kidapawan City</h4> -->
                                    <h2 class="text-capitalize text-white mb-4">From hot springs to high peaks, Kidapawan City is your gateway to the wild side of paradise.</h2>
                                    <p class="mb-5 fs-5"><?=$item['description'];?> 
                                    </p>
                                    <!-- <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php
                        $ismain="";
                            }
                        }
                        ?>                    
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
         <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                    <?=form_open('search_establishment');?>
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="description" placeholder="Eg: Lake Agco">
                    <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                    <?=form_close();?>
                </div>
            </div>
        </div>
        <!-- Gallery Start -->
        <div class="container-fluid blog py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">ESTABLISHMENT AND FACILITIES</h5>
                <h1 class="mb-4">Discover. Experience. Capture Kidapawan!</h1>
                <p class="mb-0">Step into the heart of adventure and beauty — where every corner of Kidapawan City tells a story. From the misty heights of Mount Apo to the soothing warmth of Lake Agco, and the vibrant colors of local festivals, every photo is a memory waiting to happen.
                </p>
            </div>
            <div class="tab-class text-center">                
                        <div class="row g-4 justify-content-center">
                            <?php
                            if(count($gallery) > 0){
                            foreach($gallery as $res){
                            ?>
                            <!-- <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($res['images']);?>" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2"><?=$res['companyname'];?></h5>                                            
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">                                        
                                         <a href="<?=base_url('company/'.$res['company_id']);?>" class="my-auto text-white"><i class="fas fa-search fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-lg-4 col-md-6">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <div class="blog-img-inner">
                                            <img class="img-fluid w-100 rounded-top" src="data:image/jpg;charset=utf8;base64,<?=base64_encode($res['images']);?>" alt="Image">
                                            <div class="blog-icon">
                                                <a href="<?=base_url('company/'.$res['company_id']);?>" class="my-auto"><i class="fas fa-search fa-2x text-white"></i></a>
                                            </div>
                                        </div>
                                        <!-- <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                            <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                            <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                        </div> -->
                                    </div>
                                    <div class="blog-content border border-top-0 rounded-bottom p-4">                                        
                                        <a href="#" class="h4"><?=$res['companyname'];?></a>
                                        <p class="my-3"><?=substr($res['description'], 0, 100);?>..</p>
                                        <a href="<?=base_url('company/'.$res['company_id']);?>" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        }else{
                            echo "No record found!";
                        }
                            ?>
                        </div>              
            </div>
        </div>
        <!-- Gallery End -->