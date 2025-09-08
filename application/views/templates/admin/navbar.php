<!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="<?=base_url('admin_main');?>" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div> -->
                    <?php
                    $company=$this->Tourism_model->getAllStablishment('pending');
                    $new="";
                    if(count($company) > 0){
                        $new="style='animation:blinker 1s linear infinite;';";
                    }
                    ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" <?=$new;?>>
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">New Application</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <?php
                            foreach($company as $item){
                                $date_applied=new DateTime($item['datearray']." ".$item['timearray']);
                                $date_today=new DateTime(date('Y-m-d H:i:s'));
                                $interval=$date_applied->diff($date_today);
                                $days = $interval->days; // Total number of days between the two dates
                                $years = $interval->y;
                                $months = $interval->m;
                                $remaining_days = $interval->d; // Days within the current month/year segment
                                $hours = $interval->h;
                                $minutes = $interval->i;
                                $seconds = $interval->s;
                                if($years>0){
                                    $remarks=$years." years";
                                }else if($months > 0){
                                    $remarks=$months." months";
                                }else if($days > 0){
                                    $remarks=$days." days";
                                }else if($hours>0){
                                    $remarks=$hours." hours";
                                }else if($minutes > 0){
                                    $remarks=$minutes." minutes";
                                }else{
                                    $remarks=$seconds." seconds";
                                }
                                   

                            ?>
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><?=$item['companyname'];?></h6>
                                <small><?=$remarks;?></small>
                            </a>
                            <hr class="dropdown-divider"> 
                            <?php
                            }
                            ?>                           
                            <a href="<?=base_url('manage_company_registration');?>" class="dropdown-item text-center">See all application</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?=base_url('design/assets/admin/img/user.jpg');?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?=$this->session->fullname;?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#adminlogout">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->