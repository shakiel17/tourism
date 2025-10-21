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
                        <!-- <a href="#" class="btn btn-primary btn-sm addHomeImage" data-bs-toggle="modal" data-bs-target="#ManageHomeImage">Add Image</a> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">                                    
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact #</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">FB Acct</th>
                                    <th scope="col">Loc</th>
                                    <th scope="col">Gallery</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($items as $item){
                                    
                                    echo "<tr>";
                                        echo "<td>$item[company_id]</td>";
                                        echo "<td>$item[companyname]</td>";
                                        echo "<td><span style='display:block;width:300px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;' title='$item[description]'>$item[description]</span></td>";
                                        echo "<td>$item[address]</td>";
                                        echo "<td>$item[contactno]</td>";
                                        echo "<td>$item[email]</td>";
                                        echo "<td><a href='$item[facebook]' class='btn btn-warning btn-sm' target='_blank'>View Profile</a></td>";
                                        echo "<td><a href='".base_url('view_location/'.$item['company_id']."/".$item['status'])."' class='btn btn-primary btn-sm'>View</a></td>";
                                        ?>
                                        <td width="5%">
                                            <a href="<?=base_url('view_gallery/'.$item['company_id']);?>" class="btn btn-success btn-sm">Gallery</a>
                                        </td>
                                        <?php
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
            <!-- Sales Chart End -->