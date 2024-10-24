<style>
    @media (min-width:767px ){
        .block-11 .owl-stage{
            width:auto !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            transform: none !important;
            justify-content: center !important;
        }
        
    }
</style>
<div class="site-section fund-raisers bg-light">
    <div class="container-fluid">
        <div class="col-md-12 block-11 mx-auto">
            <div class="nonloop-block-11 owl-carousel">
                <div class="card fundraise-item">
                    <a href="https://www.icerpshow.com/"><img class="card-img-top" src="<?= BASE_URL ?>assets/images/frp-images/icerp-2023.png" alt="icerp-2023.png"></a>
                </div>
                <div class="card fundraise-item">
                    <a href="https://www.compositestoday.org/"><img class="card-img-top" src="<?= BASE_URL ?>assets/images/frp-images/composite.jpg" alt="composite.jpg"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="block-23">
                    <h3 class="heading-section">Get Connected</h3>
                    <ul>
                        <li style="margin-bottom:15px !important"><span class="icon icon-map-marker"></span><span class="text">Chennai, India</span></li>
                        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9841426644</span></a></li>
                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Chennai, India</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Add Services and About Us Links -->
            <div class="col-md-6 col-lg-3">
                <div class="block-23">
                    <h3 class="heading-section">Services</h3>
                    <ul>
                        <li><a href="skill-development.php"><span class="icon icon-chevron-right"></span> Skill Development</a></li>
                        <li><a href="support-to-industry.php"><span class="icon icon-chevron-right"></span> Support to Industry</a></li>
                        <li><a href="support-to-industry.php"><span class="icon icon-chevron-right"></span> Collaborations</a></li>
                        <li><a href="members.php"><span class="icon icon-chevron-right"></span> Members</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="block-23">
                    <h3 class="heading-section">About Us</h3>
                    <ul>
                        <li><a href="objectives.php"><span class="icon icon-chevron-right"></span> Objectives</a></li>
                        <li><a href="administration.php"><span class="icon icon-chevron-right"></span> Administration</a></li>
                        <li><a href="resource-persons.php"><span class="icon icon-chevron-right"></span> Resource Persons</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-23">
                    <h3 class="heading-section">Quick Links</h3>
                    <ul>
                        <li><a href="index.php" class="active"><span class="icon icon-chevron-right"></span> Home</a></li>
                        <li><a href="upcoming-events.php"><span class="icon icon-chevron-right"></span>Events</a></li>
                        <li><a href="download.php"><span class="icon icon-chevron-right"></span> Download</a></li>
                        <li><a href="contact.php"><span class="icon icon-chevron-right"></span> Conatct Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> Powered by <a href="https://easylinkindia.com" target="_blank" style="color: #ee1c23 !important">Easy Link</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="<?php BASE_URL; ?>assets/js/jquery.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/popper.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery.stellar.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery.fancybox.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/aos.js"></script>
<script src="<?php BASE_URL; ?>assets/js/jquery.animateNumber.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/toastr.min.js"></script>
<script src="<?php BASE_URL; ?>assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true, // Loop through items
            margin: 10, // Space between items
            nav: true, // Show navigation arrows
            autoplay: true, // Auto scroll
            autoplayTimeout: 5000, // 5-second interval between slides
            items: 1, // Number of visible items
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
            }
        });
    });
    
</script>
</body>

</html>