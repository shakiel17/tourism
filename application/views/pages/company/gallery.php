<!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">                
                <table width="100%" border="0">
                    <tr>
                        <td><h4><?=$title;?></h4></td>
                        <td align="right"><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MyGallery"><i class="fa fa-plus"></i> Add Image</a></td>
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
                    <?php
                    if(count($items)>0){
                    foreach($items as $item){
                    ?>
                    <div class="col-sm-12 col-xl-3">                    
                        <div class="bg-light p-2" style="text-align:right;">
                            <a href="<?=base_url('delete_gallery/'.$item['img_id']);?>" class="bg-danger text-white rounded" onclick="return confirm('Do you wish to remove this image?');return false;"> &nbsp;&nbsp;X&nbsp;&nbsp; </a>
                        </div>
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-2">
                            <div>
                                <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($item['images']);?>" class="img-fluid w-100 h-100 rounded" alt="Image">                                                            
                            </div><br>                            
                        </div>                        
                    </div>
                   <?php
                    }
                    }else{                        
                        ?>
                        <div class="col-sm-12 col-xl-12">
                            <div style="text-align:center;">                            
                                <div class="ms-3">
                                    <p class="mb-2">No Image Found!</p>                                                                    
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>