<?php include('./include/layouts/headerfirst.php'); ?>
<title>FRP Institute</title>
<meta name="description" content="FRP Institute.">
<meta name="keywords" content="FRP Institute">
<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php include('./include/layouts/headersecond.php'); ?>
<style>
    .all-sect{
        background-color: #eeeeee;
        padding: 2em 0;
        margin: 2em 0;
    }
    .bg-card{
        background-color: #eeeeee;
        color: #fff;
        border: 0px !important;
    }
    .cards-hov:hover{
        background-color: #25276d !important;
        color: #fff !important;
    }
    .cards-hov:hover p ,.cards-hov:hover h5  ,.cards-hov:hover .section-title ,.cards-hov:hover li{
        color: #fff !important;
     }
    @media (min-width: 1200px) {
        .cards-hov{
        border: 0px !important;
    }
    
    
}
        
    
    
</style>
<!-- Main Section Start Here -->
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31">

        <!-- Slide 1 -->
        <div class="block-30 block-30-sm item" style="background-image: url('./assets/images/frp-images/background/bg1.png');" data-stellar-background-ratio="0.5">
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
        <div class="block-30 block-30-sm item" style="background-image: url('./assets/images/frp-images/background/bg2.jpg');" data-stellar-background-ratio="0.5">
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
        <div class="block-30 block-30-sm item" style="background-image: url('./assets/images/frp-images/background/bg3.jpg');" data-stellar-background-ratio="0.5">
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
        <div class="block-30 block-30-sm item" style="background-image: url('./assets/images/frp-images/background/bg4.jpg');" data-stellar-background-ratio="0.5">
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
 <div class="all-sect">
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3 cards-hov">
                    <div class="card-body ">
                        <h2 class="section-title text-center">Collaborations</h2>
                        <p class="main-text-color ">
                            The Institute aims to promote collaboration on activities and exchange of information related to composites with other professional societies, government and non-government organizations, R&D laboratories, and educational institutions operating both in India and abroad.
                        </p>

                        <p class="main-text-color">
                            FRP Institute has signed an MOU with TIFAC (Technology Information Forecasting and Assessment Council, an autonomous body under the Dept. of Science and Technology, Govt. of India, New Delhi) for collaboration in the following areas:
                        </p>
                        <ul>
                            <li class="main-text-color">Identification and development of specific composite products which can be funded by TIFAC.</li>
                            <li class="main-text-color">Evaluation of material characteristics, processing parameters, and testing/certification standards for FRP composites.</li>
                        </ul>

                        <p class="main-text-color">
                            The Institute has been working with the Composites Technology Centre, IIT Madras, for jointly organizing seminars and conferences.
                        </p>

                        <p class="main-text-color">
                            The Institute has a working agreement with JEC Composites, France, for jointly promoting exhibitions on composites and promoting innovations in composites carried out in India.
                        </p>

                        <p class="main-text-color ">
                            FRP INSTITUTE is planning to bring together an Industry-Academia partnership with the Indian Institute of Information Technology, Design, and Manufacturing (IIITDM), Kancheepuram.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('./include/layouts/footer.php'); ?>