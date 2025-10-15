        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?=base_url('admin_main');?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TOURISM</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?=base_url('design/assets/admin/img/user.jpg');?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?=$this->session->fullname;?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?=base_url('admin_main');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <a href="<?=base_url('stablishment');?>" class="nav-item nav-link"><i class="fa fa-building me-2"></i>Stablishment</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cogs me-2"></i>Settings</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?=base_url('manage_company_registration');?>" class="dropdown-item">Registration</a>
                            <a href="<?=base_url('manage_about_us');?>" class="dropdown-item">About Us</a>                            
                            <a href="<?=base_url('manage_home_image');?>" class="dropdown-item">Home Image</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->