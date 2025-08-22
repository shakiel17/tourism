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
                        <a href="#" class="btn btn-primary btn-sm">Add Image</a>
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
                                    echo "<tr>";
                                        echo "<td></td>";
                                        echo "<td></td>";
                                        echo "<td></td>";
                                        echo "<td></td>";
                                        echo "<td></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
            <!-- Sales Chart End -->