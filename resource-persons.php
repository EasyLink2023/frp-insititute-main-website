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
    
    .card.card-resouce p, .card-body p.card-text{
        color: #000 !important;
    }
    .section-lbl{
        font-size: 26px;
        font-weight: 500;

    }
    .card-resouce:hover , .cardshov:hover{
        background-color: #25276d !important;
        color: #fff !important;
    }
    .card-resouce:hover h5, .card-resouce:hover p , .cardshov:hover p ,.cardshov:hover h5{
        color: #fff !important;
     }
    @media (min-width: 1200px) {
        .card-resouce{
        height: 165px;
        border: 0px !important;
    }
}
    @media (min-width:991.5px) and (max-width:1200px) {
     .card-resouce{
        height: 175px;
        border: 0px !important;
     }
   }
   @media (min-width:768px) and (max-width:991px) {
     .card-resouce{
        height: 230px;
        border: 0px !important;
     }
   }
   @media (max-width:768.5px) {
     .card-resouce{
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
    <h2 class="display-4 text-center">Resource Persons</h2>
    <p class="text-center">The institute draws technical help from a number of experts both from India and abroad. There is an International Advisory Board and a panel of Indian experts providing guidance and advice on various aspects of Composites Technology.</p>

    <h3 class="section-title">International Advisory Board</h3>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-resouce">
                <div class="card-body">
                    <h5 class="card-title">Dr. Srinivasa L. Iyer, Chairman</h5>
                    <p class="card-text">California, USA</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-resouce">
                <div class="card-body">
                    <h5 class="card-title">Dr. Hota Ganga Rao</h5>
                    <p class="card-text">Professor, West Virginia University</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-resouce">
                <div class="card-body">
                    <h5 class="card-title">Prof. Rajan Sen, Ph.D, P.E., F.ACI, F.ASCE</h5>
                    <p class="card-text">University of South Florida<br>Email: <a href="mailto:sen@usf.edu">sen@usf.edu</a></p>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mb-3 section-title">Resource People in India</h3>

    <h4 class="section-lbl mb-2 ">Bangalore</h4>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Dr. Krishnadas Nair</h5>
                    <p class="card-text">Former Chairman, HAL Ltd.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Prof. Dwarakadasa</h5>
                    <p class="card-text">Bangalore</p>
                </div>
            </div>
        </div>
    </div>

    <h4 class="section-lbl mb-2 ">Chennai</h4>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Dr. R. Velmurugan</h5>
                    <p class="card-text">Head, Composite Technology Centre, IIT Madras.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Dr. V. Velpari</h5>
                    <p class="card-text">Executive Director, Harsha Fibres & Composites</p>
                </div>
            </div>
        </div>
    </div>

    <h4 class="section-lbl mb-2 ">New Delhi</h4>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Mr. N. N. Goyal</h5>
                    <p class="card-text">Director, U. P. Twiga Fiberglass Ltd.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Mr. R. N. Gupta</h5>
                    <p class="card-text">Director, Revex Plasticizers Ltd.</p>
                </div>
            </div>
        </div>
    </div>

    <h4 class="section-lbl mb-2 ">Mumbai</h4>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Prof. S. C. Lakkad</h5>
                    <p class="card-text">Former Deputy Director, IIT, Bombay</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card cardshov ">
                <div class="card-body">
                    <h5 class="card-title">Mr. S. Ramachandran</h5>
                    <p class="card-text">Mumbai</p>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>





<?php include('./include/layouts/footer.php'); ?>