<!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">                
                <table width="100%" border="0">
                    <tr>
                        <td><h4><?=$title;?></h4></td>
                        <!-- <td align="right"><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MyGallery"><i class="fa fa-plus"></i> Add Image</a></td> -->
                    </tr>          
                </table>                    
            </div>
            <?php
            if($this->session->success){
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="alert alert-success"><?=$this->session->success;?></div>
            </div>
            <?php
            }
            if($this->session->failed){
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="alert alert-danger"><?=$this->session->failed;?></div>
            </div>
            <?php
            }
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-sm-12 col-xl-12">  
                        <div class="bg-light rounded h-100 p-4">
                                <form name="profile" action="<?=base_url('update_company_profile');?>" method="POST">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="companyname" placeholder="Company Name"
                                            id="floatingTextarea" style="height: 60px;"><?=$item['companyname'];?></textarea>
                                        <label for="floatingTextarea">Company Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="description" placeholder="Company Description"
                                            id="floatingTextarea" style="height: 300px;"><?=$item['description'];?></textarea>
                                        <label for="floatingTextarea">Description</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="address" placeholder="Company Address"
                                            id="floatingTextarea" style="height: 150px;"><?=$item['address'];?></textarea>
                                        <label for="floatingTextarea">Address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="contactno" placeholder="Company Contact No."
                                            id="floatingTextarea" style="height: 60px;"><?=$item['contactno'];?></textarea>
                                        <label for="floatingTextarea">Contact No</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="email" placeholder="Company Email"
                                            id="floatingTextarea" style="height: 60px;"><?=$item['email'];?></textarea>
                                        <label for="floatingTextarea">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="facebook" placeholder="Facebook Page"
                                            id="floatingTextarea" style="height: 60px;"><?=$item['facebook'];?></textarea>
                                        <label for="floatingTextarea">Facebook</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="location" placeholder="Company Location Map"
                                            id="floatingTextarea" style="height: 150px;"><?=$item['location'];?></textarea>
                                        <label for="floatingTextarea">Location Map</label>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </form>                         
                        </div>                 
                    </div>
                </div>
            </div>