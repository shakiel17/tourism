<div class="modal fade" id="adminlogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-bs-dismiss="modal">×</button> -->
                    <h4>Leaving so soon?</h4>
                </div>
                <div class="modal-body">
                    <h3>Do you wish to logout?</h3>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary" data-bs-dismiss="modal">No, I will stay!</a>
                    <a href="<?=base_url('logout');?>" class="btn btn-danger" data-dismiss="modal">Yes, I will go!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="MyGallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-bs-dismiss="modal">×</button> -->
                    <h4>Manage Gallery</h4>
                </div>
                <form action="<?=base_url('save_gallery');?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="home_image_id">
                <div class="modal-body">                    
                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group mt-2">                        
                        <input type="checkbox" name="is_featured" value="1">
                        <label>Is Featured?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>