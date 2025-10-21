<!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">                
                <table width="100%" border="0">
                    <tr>
                        <td><h4><a href="<?=base_url($loc);?>"><< Back</a> | <?=$title;?></h4></td>                        
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
                    <?=$item['location'];?>
                </div>
            </div>