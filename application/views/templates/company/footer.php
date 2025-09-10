        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('design/assets/admin/lib/chart/chart.min.js');?>"></script>
    <script src="<?=base_url('design/assets/admin/lib/easing/easing.min.js');?>"></script>
    <script src="<?=base_url('design/assets/admin/lib/waypoints/waypoints.min.js');?>"></script>
    <script src="<?=base_url('design/assets/admin/lib/owlcarousel/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('design/assets/admin/lib/tempusdominus/js/moment.min.js');?>"></script>
    <script src="<?=base_url('design/assets/admin/lib/tempusdominus/js/moment-timezone.min.js');?>"></script>
    <script src="<?=base_url('design/assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url('design/assets/admin/js/main.js');?>"></script>
    <script>
        $('.addHomeImage').click(function(){
            document.getElementById('home_image_id').value="";
            document.getElementById('home_image_description').value="";
            document.getElementById('home_image_is_featured').checked=false;
            document.getElementById('home_image_is_background').checked=false;
        });
        $('.editHomeImage').click(function(){
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('home_image_id').value=id[0];
            document.getElementById('home_image_description').value=id[1];
            if(id[2] == 1){
                document.getElementById('home_image_is_featured').checked=true;
            }else{
                document.getElementById('home_image_is_featured').checked=false;
            }
            if(id[3] == 1){
                document.getElementById('home_image_is_background').checked=true;
            }else{
                document.getElementById('home_image_is_background').checked=false;
            }
        });
    </script>
</body>

</html>