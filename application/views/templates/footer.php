<!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> <?=$detail['address'];?></a>
                            <a href=""><i class="fas fa-envelope me-2"></i> <?=$detail['email'];?></a>
                            <a href=""><i class="fas fa-phone me-2"></i> <?=$detail['contactno'];?></a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> <?=$detail['contactno'];?></a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>    
        <script>
            let map = L.map('map').setView([14.5995, 120.9842], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            let marker, startPoint, endPoint, routeLayer;

            function updateLatLngDisplay(lat, lng) {
            document.getElementById('latlng').textContent = lat.toFixed(6) + ', ' + lng.toFixed(6);
            }

            function updateZoomDisplay() {
            document.getElementById('zoom').textContent = map.getZoom();
            }

            async function reverseGeocode(lat, lng) {
            try {
                const res = await fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`);
                const data = await res.json();
                document.getElementById('address').textContent = data.display_name || '—';
            } catch (e) {
                document.getElementById('address').textContent = 'Error fetching address';
            }
            }

            function placeMarker(lat, lng, centerMap = true) {
            if (!marker) {
                marker = L.marker([lat, lng], { draggable: true }).addTo(map);
                marker.on('dragend', function (e) {
                const pos = e.target.getLatLng();
                updateLatLngDisplay(pos.lat, pos.lng);
                reverseGeocode(pos.lat, pos.lng);
                });
            } else {
                marker.setLatLng([lat, lng]);
            }
            updateLatLngDisplay(lat, lng);
            reverseGeocode(lat, lng);
            if (centerMap) map.panTo([lat, lng]);
            }

            map.on('click', function (e) {
            if (!startPoint) {
                startPoint = e.latlng;
                L.marker(startPoint, {color: 'green'}).addTo(map).bindPopup('Start Point').openPopup();
            } else if (!endPoint) {
                endPoint = e.latlng;
                L.marker(endPoint, {color: 'red'}).addTo(map).bindPopup('End Point').openPopup();
            } else {
                startPoint = e.latlng; endPoint = null;
                map.eachLayer(layer => {
                if (layer instanceof L.Marker && !layer._icon.classList.contains('leaflet-user-marker')) {
                    map.removeLayer(layer);
                }
                });
                L.marker(startPoint).addTo(map).bindPopup('Start Point').openPopup();
            }
            });

            map.on('zoomend', updateZoomDisplay);
            updateZoomDisplay();

            document.getElementById('loc-btn').addEventListener('click', () => {
            if (!navigator.geolocation) return alert('Geolocation not supported.');
            navigator.geolocation.getCurrentPosition(pos => {
                placeMarker(pos.coords.latitude, pos.coords.longitude, true);
                map.setZoom(16);
            });
            });

            async function getRoute() {
            if (!startPoint || !endPoint) return alert('Select start & end points by clicking on map.');
            const mode = document.getElementById('travel-mode').value;
            const profile = mode === 'walking' ? 'foot' : 'driving';
            const url = `https://router.project-osrm.org/route/v1/${profile}/${startPoint.lng},${startPoint.lat};${endPoint.lng},${endPoint.lat}?overview=full&geometries=geojson`;
            try {
                const res = await fetch(url);
                const data = await res.json();
                if (data.routes && data.routes.length > 0) {
                const route = data.routes[0];
                if (routeLayer) map.removeLayer(routeLayer);
                routeLayer = L.geoJSON(route.geometry).addTo(map);
                map.fitBounds(routeLayer.getBounds());
                document.getElementById('route-info').textContent = `Distance: ${(route.distance/1000).toFixed(2)} km | Duration: ${(route.duration/60).toFixed(1)} min`;
                } else {
                document.getElementById('route-info').textContent = 'No route found';
                }
            } catch (e) {
                document.getElementById('route-info').textContent = 'Error fetching route';
            }
            }

            document.getElementById('dir-btn').addEventListener('click', getRoute);

            // Search box with Nominatim
            const searchBox = document.getElementById('search-box');
            const resultsDiv = document.getElementById('search-results');

            async function searchPlaces(query) {
            try {
                const res = await fetch(`https://nominatim.openstreetmap.org/search?format=jsonv2&q=${encodeURIComponent(query)}`);
                const data = await res.json();
                resultsDiv.innerHTML = '';
                if (data.length === 0) {
                resultsDiv.innerHTML = '<div>No results found</div>';
                } else {
                data.slice(0, 5).forEach(place => {
                    const div = document.createElement('div');
                    div.textContent = place.display_name;
                    div.addEventListener('click', () => {
                    resultsDiv.style.display = 'none';
                    placeMarker(parseFloat(place.lat), parseFloat(place.lon), true);
                    map.setZoom(16);
                    });
                    resultsDiv.appendChild(div);
                });
                }
                resultsDiv.style.display = 'block';
            } catch (e) {
                resultsDiv.innerHTML = '<div>Error fetching results</div>';
                resultsDiv.style.display = 'block';
            }
            }

            searchBox.addEventListener('keyup', (e) => {
            const query = e.target.value.trim();
            if (query.length > 2) {
                searchPlaces(query);
            } else {
                resultsDiv.style.display = 'none';
            }
            });
        </script>    
    </body>

</html>