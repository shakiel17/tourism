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
                
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"><?=$title;?></h6>
                        <a href="#" class="btn btn-primary btn-sm addHomeImage" data-bs-toggle="modal" data-bs-target="#ManageHomeImage">Add Image</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">                                    
                                    <th scope="col">Img</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">is_featured</th>
                                    <th scope="col">is_background</th>                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($gallery as $item){
                                    if($item['is_featured']==1){
                                        $featured="Yes";
                                    }else{
                                        $featured="No";
                                    }
                                    if($item['is_background']==1){
                                        $background="Yes";
                                    }else{
                                        $background="No";
                                    }
                                    echo "<tr>";
                                        echo "<td align='center' width='100'><img src='data:image/jpg;charset=utf8;base64,".base64_encode($item['image'])."' width='100'></td>";
                                        echo "<td>$item[description]</td>";
                                        echo "<td align='center'>$featured</td>";
                                        echo "<td align='center'>$background</td>";
                                        echo "<td><a href='#' class='btn btn-warning btn-sm editHomeImage' data-bs-toggle='modal' data-bs-target='#ManageHomeImage' data-id='$item[id]_$item[description]_$item[is_featured]_$item[is_background]'>Edit</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
            <!-- Sales Chart End -->