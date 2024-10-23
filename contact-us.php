<?php include('./include/layouts/headerfirst.php'); ?>
<title>FRP Institute</title>
<meta name="description" content="FRP Institute.">
<meta name="keywords" content="FRP Institute">
<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<style>
    .card-custom {
            background-color: #444; /* Slightly lighter background for the card */
            margin-bottom: 20px; /* Space between cards */
        }

</style>
<?php include('./include/layouts/headersecond.php'); ?>
<!-- Main Section Start Here -->
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31">

        <!-- Slide 1 -->
        <div class="block-30 block-30-sm item" style="background-image: url('<?php BASE_URL; ?>assets/images/frp-images/background/bg1.png');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="main-heading mb-3">Frp Institute</h2>
                        <h3 class="main-heading-text">
                            Promotes Indian <br> Composites <br> Industry
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="block-30 block-30-sm item" style="background-image: url('<?php BASE_URL; ?>assets/images/frp-images/background/bg2.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="main-heading mb-3">Frp Institute</h2>
                        <h3 class="main-heading-text">
                            Promotes Indian <br> Composites <br> Industry
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="block-30 block-30-sm item" style="background-image: url('<?php BASE_URL; ?>assets/images/frp-images/background/bg3.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="main-heading mb-3">Frp Institute</h2>
                        <h3 class="main-heading-text">
                            Promotes Indian <br> Composites <br> Industry
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="block-30 block-30-sm item" style="background-image: url('<?php BASE_URL; ?>assets/images/frp-images/background/bg4.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="main-heading mb-3">Frp Institute</h2>
                        <h3 class="main-heading-text">
                            Promotes Indian <br> Composites <br> Industry
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Main Section End Here -->
<div class="featured-section overlay-color-2">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Registered Address Card -->
                <div class="card card-custom">
                    <div class="card-body">
                        <h2 class="card-title text-center">Registered Address</h2>
                        <p>FRP INSTITUTE<br>
                        NP 23/24, Developed Plot, Ekkattuthangal, Chennai – 600 032</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Address for Communication Card -->
                <div class="card card-custom">
                    <div class="card-body">
                        <h2 class="card-title text-center">Address for Communication</h2>
                        <p>4 Avinash Bhuvan, Kunuwadi, Next To Rbt Gujarati School,<br>
                        Dixit Rd No 1, Vile Parle Easy-400067</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Websites Card -->
                <div class="card card-custom">
                    <div class="card-body">
                        <h2 class="card-title text-center">Websites</h2>
                        <p>
                            <a href="http://www.frpinstitute.org" class="text-white">www.frpinstitute.org</a><br>
                            <a href="http://www.icerpshow.com" class="text-white">www.icerpshow.com</a><br>
                            <a href="http://www.compositetoday.org" class="text-white">www.compositetoday.org</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Email Card -->
                <div class="card card-custom">
                    <div class="card-body">
                        <h2 class="card-title text-center">Email</h2>
                        <p>
                            <a href="mailto:frp@frpinstitute.org" class="text-white">frp@frpinstitute.org</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Contact Person Card -->
                <div class="card card-custom">
                    <div class="card-body">
                        <h2 class="card-title text-center">Contact Person</h2>
                        <p>
                            Mr. Hemant Bhide<br>
                            <strong>Mobile:</strong> +91-9821033888
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6465.408100676727!2d72.84466737690651!3d19.0962131513344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9100d9e5ad7%3A0x131936409b90ad0f!2sAvinash%20Bhuvan!5e1!3m2!1sen!2sin!4v1729225684572!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 pl-md-5">
                <?php include('./include/contact-form.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('./include/layouts/footer.php'); ?>