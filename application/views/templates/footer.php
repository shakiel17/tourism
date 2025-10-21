<!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a><i class="fas fa-home me-2"></i> <?=$detail['address'];?></a>
                            <a><i class="fas fa-envelope me-2"></i> <?=$detail['email'];?></a>
                            <a><i class="fas fa-phone me-2"></i> <?=$detail['contactno'];?></a>
                            <a class="mb-3"><i class="fas fa-print me-2"></i> <?=$detail['contactno'];?></a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href="<?=base_url('register');?>"><i class="fas fa-angle-right me-2"></i> Register</a>
                            <a href="<?=base_url('login');?>"><i class="fas fa-angle-right me-2"></i> Login</a>
                            <!-- <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">INR</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select1">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url('design/assets/user/lib/easing/easing.min.js');?>"></script>
        <script src="<?=base_url('design/assets/user/lib/waypoints/waypoints.min.js');?>"></script>
        <script src="<?=base_url('design/assets/user/lib/owlcarousel/owl.carousel.min.js');?>"></script>
        <script src="<?=base_url('design/assets/user/lib/lightbox/js/lightbox.min.js');?>"></script>
        
        <!-- Template Javascript -->
        <script src="<?=base_url('design/assets/user/js/main.js');?>"></script>   
        <script>
            const form = document.getElementById('ratingForm');
            const radios = Array.from(document.querySelectorAll('input[name="rating"]'));
            const selectedValue = document.getElementById('selectedValue');
            const result = document.getElementById('result');
            const clearBtn = document.getElementById('clearBtn');

            function getCheckedValue(){
            const r = radios.find(i => i.checked);
            return r ? r.value : null;
            }

            function updateDisplay(){
            const v = getCheckedValue();
            selectedValue.textContent = v ? v + '/5' : '—';
            }

            radios.forEach(r => r.addEventListener('change', updateDisplay));

            form.addEventListener('submit', e => {
            e.preventDefault();
            const rating = getCheckedValue();
            const comment = document.getElementById('comment').value.trim();
            if(!rating){
                result.style.display = 'block';
                result.textContent = '⚠ Please select a rating before submitting.';
                return;
            }
            result.style.display = 'block';
            result.textContent = `✅ Thanks! You rated this ${rating}/5.` + (comment ? ` Comment: "${comment}"` : '');
            });

            clearBtn.addEventListener('click', () => {
            radios.forEach(r => r.checked = false);
            document.getElementById('comment').value = '';
            updateDisplay();
            result.style.display = 'none';
            });

            updateDisplay();
        </script>        
    </body>

</html>