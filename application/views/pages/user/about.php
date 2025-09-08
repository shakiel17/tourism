<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <?php
                            $background="";
                            foreach($carousel as $row){
                                if($row['is_background']==1){
                                    $background="<img src='data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])."' class='img-fluid w-100 h-100' alt=''>";
                                }
                            }
                            ?>     
                            <?=$background;?>                       
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">About Us</h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary"><?=$detail['website_name'];?></span></h1>
                        <p class="mb-4"><?=nl2br($detail['about_us']);?></p>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->