            <?php
            $description="";
            $name="";
            $contact="";
            $address="";
            $email="";
            $location="";
            if($about){
                $description=$about['about_us'];
                $name=$about['website_name'];
                $contact=$about['contactno'];
                $address=$about['address'];
                $email=$about['email'];
                $location=$about['location'];
            }
            ?>
            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <?php
                if($this->session->flashdata('success')){
                    ?>
                    <div class="alert alert-success"><?=$this->session->flashdata('success');?></div>
                    <?php
                }
                if($this->session->flashdata('failed')){
                    ?>
                    <div class="alert alert-danger"><?=$this->session->flashdata('failed');?></div>
                    <?php
                }
                ?>                
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0"><?=$title;?></h6>                                
                            </div>
                            <form action="<?=base_url('save_about_us');?>" method="POST">
                            <div class="d-flex align-items-left justify-content-between mb-4">                                
                                <table width="100%" border="0" cellpadding="2" style="text-align:left;">
                                    <tr>
                                        <td><b>Website Name</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="website_name" class="form-control" value="<?=$name;?>"></td>
                                    </tr>
                                    <tr>
                                        <td><b>About Us</b></td>
                                    </tr>
                                    <tr>
                                        <td><textarea name="description" class="form-control" rows="10"><?=$description;?></textarea></td>
                                    </tr>                                    
                                    <tr>
                                        <td><b>Contact No.</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contactno" class="form-control" value="<?=$contact;?>"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Address</b></td>
                                    </tr>
                                    <tr>
                                        <td><textarea name="address" class="form-control" rows="3"><?=$address;?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" class="form-control" value="<?=$email;?>"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Map Location</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="location" class="form-control" placeholder="Paste Map URL Here"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php
                                           echo $location;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mt-2"><button type="submit" class="btn btn-primary">Update</button></td>
                                    </tr>
                                </table>                                
                            </div>        
                            </form>                    
                        </div>
                    </div>                    
                </div>
            </div>
            <!-- Sales Chart End -->