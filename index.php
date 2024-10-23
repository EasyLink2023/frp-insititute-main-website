<?php include('./include/layouts/headerfirst.php'); ?>
<title>FRP Institute</title>
<meta name="description" content="FRP Institute.">
<meta name="keywords" content="FRP Institute">
<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php include('./include/layouts/headersecond.php'); ?>
<style>
    body {
        font-family: "Overpass", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
            "Segoe UI Symbol";
        background: #fff;
        font-size: 16px;
        line-height: 1.8;
        font-weight: 300;
        color: #555555;
    }

    a {
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
        color: #ee1c23;
    }

    a:hover {
        text-decoration: none;
        color: #ee1c23;
    }

    a.link-underline {
        text-decoration: underline;
    }

    a.link-underline:hover {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5 {
        color: #000;
        font-weight: 300;
        font-family: "Dosis", sans-serif;
    }

    .text-primary {
        color: #f7ca44 !important;
    }

    .ftco-navbar-light {
        background: transparent !important;
        position: absolute;
        left: 0;
        right: 0;
        z-index: 3;
        top: 10px;
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light {
            background: #000 !important;
            top: 0;
            position: relative;
        }
    }

    .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
        font-size: 16px;
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 20px;
        padding-right: 20px;
        color: #f0f0f0;
        opacity: 1 !important;
    }

    .ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover {
        color: #fff;
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0px;
            padding-right: 0px;
        }
    }

    .ftco-navbar-light .navbar-nav>.nav-item.ftco-seperator {
        position: relative;
        margin-left: 20px;
        padding-left: 20px;
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light .navbar-nav>.nav-item.ftco-seperator {
            padding-left: 0;
            margin-left: 0;
        }
    }

    .ftco-navbar-light .navbar-nav>.nav-item.ftco-seperator:before {
        position: absolute;
        content: "";
        top: 10px;
        bottom: 10px;
        left: 0;
        width: 2px;
        background: rgba(255, 255, 255, 0.05);
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light .navbar-nav>.nav-item.ftco-seperator:before {
            display: none;
        }
    }

    .ftco-navbar-light .navbar-nav>.nav-item.cta>a {
        padding-left: 0;
        color: #fff;
    }

    .ftco-navbar-light .navbar-nav>.nav-item.cta>a span {
        border: 2px solid #fff;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 4px;
    }

    .ftco-navbar-light .navbar-nav>.nav-item.cta.cta-colored span {
        border-color: #f7ca44;
    }

    .ftco-navbar-light .navbar-nav>.nav-item.active>a {
        color: #fff;
        position: relative;
    }

    .ftco-navbar-light .navbar-nav>.nav-item.active>a:before {
        content: "";
        height: 2px;
        background: #fff;
        left: 20px;
        right: 20px;
        position: absolute;
        bottom: 20px;
        color: #25276d;
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light .navbar-nav>.nav-item.active>a:before {
            display: none;
        }
    }

    .ftco-navbar-light .navbar-toggler {
        border: none;
        color: rgba(255, 255, 255, 0.5) !important;
        cursor: pointer;
        padding-right: 0;
        text-transform: uppercase;
        font-size: 16px;
        letter-spacing: 0.1em;
    }

    .ftco-navbar-light.scrolled {
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        margin-top: -130px;
        background: #fff !important;
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .ftco-navbar-light.scrolled .nav-item.active>a {
        color: #ee2026 !important;
    }

    .ftco-navbar-light.scrolled .nav-item.active>a:before {
        display: none;
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light.scrolled .navbar-nav {
            background: none;
            border-radius: 0px;
            padding-left: 0rem !important;
            padding-right: 0rem !important;
        }
    }

    @media (max-width: 767.98px) {
        .ftco-navbar-light.scrolled .navbar-nav {
            background: none;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }

    .ftco-navbar-light.scrolled .navbar-toggler {
        border: none;
        color: rgba(0, 0, 0, 0.5) !important;
        border-color: rgba(0, 0, 0, 0.5) !important;
        cursor: pointer;
        padding-right: 0;
        text-transform: uppercase;
        font-size: 16px;
        letter-spacing: 0.1em;
    }

    .ftco-navbar-light.scrolled .nav-link {
        padding-top: 0.9rem !important;
        padding-bottom: 0.9rem !important;
        color: #25276d !important;
    }

    .ftco-navbar-light.scrolled .nav-link.active {
        color: #f7ca44 !important;
    }

    .ftco-navbar-light.scrolled.awake {
        margin-top: 0px;
        -webkit-transition: 0.3s all ease-out;
        -o-transition: 0.3s all ease-out;
        transition: 0.3s all ease-out;
    }

    .ftco-navbar-light.scrolled.sleep {
        -webkit-transition: 0.3s all ease-out;
        -o-transition: 0.3s all ease-out;
        transition: 0.3s all ease-out;
    }

    .ftco-navbar-light.scrolled .navbar-brand {
        color: #000;
    }

    .navbar-brand {
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-size: 30px;
        font-family: "Overpass", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
            "Segoe UI Symbol";
    }

    .bg-image,
    .ftco-cover {
        background-size: cover;
        background-repeat: no-repeat;
    }

    .ftco-cover {
        background-position: center center;
    }

    .ftco-cover .ftco-heading {
        font-size: 50px;
        line-height: 1.2;
        color: #fff;
    }

    @media (max-width: 991.98px) {
        .ftco-cover .ftco-heading {
            font-size: 37px;
            line-height: 1.3;
        }
    }

    .ftco-cover .ftco-subheading {
        max-width: 450px;
        line-height: 1.5;
    }

    .ftco-cover .ftco-subheading,
    .ftco-cover p {
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 300;
        font-family: "Overpass", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
            "Segoe UI Symbol";
    }

    @media (max-width: 991.98px) {
        .ftco-cover .btn {
            width: 100% !important;
        }
    }

    .ftco-cover a {
        position: relative;
        color: #fff;
    }

    .ftco-cover.overlay {
        position: relative;
    }

    .ftco-cover.overlay:before {
        content: "";
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }

    .ftco-cover .ftco-vh-100 {
        min-height: 700px !important;
    }

    .ftco-uppercase {
        font-size: 30px;
    }

    .menu-item {
        margin-bottom: 30px;
    }

    .menu-item img {
        width: 100px;
        border-radius: 50%;
    }

    .menu-item .menu-price {
        font-size: 24px;
    }

    @media (max-width: 991.98px) {
        .display-4 {
            font-size: 37px;
        }
    }

    .bg-light {
        background: #f1efed !important;
        background: #fafafa !important;
    }

    .ftco-custom-gutters {
        margin-left: -10px;
        margin-right: -10px;
    }

    .ftco-custom-gutters [class*="col-"] {
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 5px;
    }

    .ftco-custom-gutters [class*="col-"] .ftco-thumbnail {
        display: block;
        margin-bottom: 5px;
    }

    .btn:hover,
    .btn:active,
    .btn:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .ftco-play-video span {
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .ftco-play-video>.play-icon-wrap {
        display: inline-block;
        width: 50px;
        height: 50px;
        border: 1px solid #fff;
        position: relative;
        border-radius: 50%;
    }

    .ftco-play-video>.play-icon-wrap>span {
        font-size: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: 2px;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .ftco-play-video:hover>.play-icon-wrap {
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
    }

    .ftco-play-video:hover span {
        color: #fff;
    }

    .block-41 .block-41-subheading {
        margin-bottom: 10px;
        color: #ccc;
    }

    .block-41 .block-41-subheading>div {
        display: inline-block;
        text-transform: uppercase;
    }

    .block-41 .block-41-subheading>div.block-41-line {
        height: 2px;
        width: 50px;
        background: #f7ca44;
    }

    .block-41 .block-41-heading {
        line-height: 1.2;
    }

    @media (min-width: 768px) {
        .block-41 .block-41-text {
            font-size: 20px;
        }
    }

    .block-48 {
        background: #f7ca44;
        padding: 50px;
        color: #000;
    }

    .block-48 .block-48-text-1 {
        font-size: 30px;
    }

    .block-48 .block-48-counter {
        font-size: 70px;
        line-height: 1;
    }

    .block-11 .owl-stage {
        padding-top: 50px;
        padding-bottom: 50px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .block-11 .owl-nav {
        position: relative;
        position: absolute;
        bottom: -50px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .block-11 .owl-nav .owl-prev,
    .block-11 .owl-nav .owl-next {
        position: relative;
        display: inline-block;
        padding: 20px;
        font-size: 30px;
    }

    .block-11 .owl-nav .owl-prev.disabled,
    .block-11 .owl-nav .owl-next.disabled {
        opacity: 0.2;
    }

    .btn {
        cursor: pointer;
        border-radius: 0px;
        border: 2px solid transparent;
        font-size: 14px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #999999;
        -webkit-box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.5);
        box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.5);
    }

    .btn.btn-hover-white:hover {
        background: transparent;
        color: #fff !important;
    }

    .btn.btn-success {
        border: 2px solid #28a745;
        color: #fff;
    }

    .btn.btn-white {
        background: #fff;
        color: #000;
    }

    .btn.btn-white:hover {
        background: #000;
        color: #fff;
    }

    .btn.btn-primary {
        background: #f7ca44;
        border: 2px solid #f7ca44;
        color: #fff;
    }

    .btn.btn-primary:hover {
        border: 2px solid #f7ca44;
        background: transparent;
        color: #f7ca44;
    }

    .btn.btn-primary:active,
    .btn.btn-primary:focus {
        color: #fff !important;
    }

    .btn.btn-primary.btn-outline-primary {
        border: 2px solid #f7ca44;
        background: transparent;
        color: #f7ca44;
    }

    .btn.btn-primary.btn-outline-primary:hover {
        border: 2px solid transparent;
        background: #f7ca44;
        color: #000;
    }

    .btn.btn-outline-white {
        border-color: rgba(255, 255, 255, 0.8);
        background: none;
        border-radius: 0px;
        border-width: 2px;
        color: #000;
    }

    .btn.btn-outline-white:hover,
    .btn.btn-outline-white:focus,
    .btn.btn-outline-white:active {
        background: #fff;
        border-color: #fff;
        color: #000;
    }

    .btn:hover,
    .btn:active,
    .btn:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        background: #000 !important;
        color: #fff !important;
        border-color: #000 !important;
    }

    .form-control {
        background: #fff !important;
        color: #000 !important;
        border-radius: 0px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .form-control:focus,
    .form-control:active {
        border-color: #000;
    }

    textarea.form-control {
        height: inherit !important;
    }

    .ftco-vh-100 {
        height: 100vh;
    }

    @media (max-width: 1199.98px) {
        .ftco-vh-100 {
            height: inherit;
            padding-top: 5em;
            padding-bottom: 5em;
        }
    }

    .ftco-vh-75 {
        height: 75vh;
        min-height: 700px;
    }

    @media (max-width: 1199.98px) {
        .ftco-vh-75 {
            min-height: 700px;
            height: inherit;
            padding-top: 5em;
            padding-bottom: 5em;
        }
    }

    .ftco-tab-nav {
        padding: 0;
        margin: 0;
        display: inline-block !important;
    }

    @media (max-width: 767.98px) {
        .ftco-tab-nav {
            display: block !important;
            margin-bottom: 10px;
            width: 100% !important;
        }
    }

    .ftco-tab-nav li {
        padding: 0;
        margin: 0 5px;
        display: inline-block !important;
    }

    @media (max-width: 767.98px) {
        .ftco-tab-nav li {
            display: block !important;
            margin-bottom: 10px;
            width: 100% !important;
        }
    }

    .ftco-tab-nav li a {
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 0.2em;
        color: #ccc;
        border: 2px solid #ccc;
        border-radius: 0 !important;
    }

    .ftco-tab-nav li a.active {
        background: none !important;
        color: black !important;
        border: 2px solid #000;
    }

    .post-entry {
        margin-bottom: 40px;
    }

    .post-entry .img-wrap {
        position: relative;
        display: block;
        overflow: hidden;
    }

    .post-entry .img-wrap img {
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .post-entry .img-wrap .date {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px 20px;
        background: #f7ca44;
        color: #fff;
        font-size: 14px;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .post-entry .img-wrap:hover img {
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
    }

    .post-entry .img-wrap:hover .date {
        font-size: 16px;
        color: #fff;
        background: #000;
    }

    .post-entry h3 {
        font-size: 20px;
        line-height: 1.5;
    }

    .post-entry h3 a {
        color: #000;
    }

    .post-entry h3 a:hover {
        color: #f7ca44;
    }

    .post-entry p {
        color: #999999;
    }

    .featured-donate,
    .featured-section {
        padding: 4em 0;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .featured-donate img,
    .featured-section img {
        -webkit-box-shadow: 0 4px 30px -5px black;
        box-shadow: 0 4px 30px -5px black;
        border-radius: 7px;
    }

    .featured-donate h2,
    .featured-section h2 {
        color: #fff;
    }

    .featured-donate p,
    .featured-section p {
        color: #fff;
    }

    .featured-donate .featured-text,
    .featured-section .featured-text {
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.2em;
    }

    .featured-donate .donation-time,
    .featured-section .donation-time {
        color: rgba(255, 255, 255, 0.7);
        display: block;
        font-style: italic;
        font-size: 15px;
    }

    .featured-donate .fund-raised,
    .featured-section .fund-raised {
        font-weight: 900;
        color: #fff;
    }

    .featured-donate.overlay-color,
    .featured-donate.overlay-color-2,
    .featured-section.overlay-color,
    .featured-section.overlay-color-2 {
        position: relative;
    }

    .featured-donate.overlay-color:before,
    .featured-donate.overlay-color-2:before,
    .featured-section.overlay-color:before,
    .featured-section.overlay-color-2:before {
        position: absolute;
        content: "";
        background: #28a745;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        opacity: 0.9;
    }

    .featured-donate.overlay-color-2:before,
    .featured-section.overlay-color-2:before {
        background: #4d617de3;
    }

    .form-volunteer h2 {
        font-size: 25px;
        margin-bottom: 20px;
    }

    .form-volunteer label {
        color: #fff;
    }

    .form-volunteer .form-control {
        border: 2px solid #fff;
        background: none !important;
        margin-bottom: 10px;
        color: #fff !important;
    }

    .form-volunteer .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #fff;
        font-style: italic;
    }

    .form-volunteer .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: #fff;
        font-style: italic;
    }

    .form-volunteer .form-control:-ms-input-placeholder {
        /* IE 10+ */
        color: #fff;
        font-style: italic;
    }

    .form-volunteer .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: #fff;
        font-style: italic;
    }

    .custom-progress {
        background-color: #fff;
        height: 0.2rem;
        border-radius: 30px;
        overflow: hidden;
        margin-bottom: 10px;
    }

    .person-donate em {
        font-family: serif;
    }

    .person-donate img {
        border-radius: 7px;
        width: 180px;
        margin-bottom: 20px;
    }

    .person-donate h2 {
        font-size: 20px;
        margin: 0;
        padding: 0;
    }

    .person-donate p {
        line-height: 1.5;
    }

    .person-donate .time {
        color: #b3b3b3;
        font-size: 13px;
    }

    .person-donate .donate-amount>div {
        width: 50%;
        padding: 10px;
    }

    .person-donate .donate-amount .label {
        background: #f2f2f2;
    }

    .person-donate .donate-amount .amount {
        background: #28a745;
        color: #fff;
    }

    .fundraise-item {
        -webkit-box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.1);
        border: none;
        height: 100%;
    }

    .fundraise-item .custom-progress-success {
        background-color: #f2f2f2;
        height: 0.2rem;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .fundraise-item a {
        color: #000;
    }

    .fundraise-item a:hover {
        color: #f7ca44;
    }

    .fundraise-item .donation-time {
        color: #ccc;
        display: block;
        font-style: italic;
        font-size: 15px;
    }

    .fundraise-item .card-title {
        font-size: 24px;
    }

    .ftco-animate {
        opacity: 0;
        visibility: hidden;
    }

    .bg-primary {
        background: #f7ca44 !important;
    }

    .site-section {
        padding: 3em 0;
    }

    .border-top {
        border-top: 1px solid #f2f2f2 !important;
    }

    .ftco-bg-dark {
        background: #3c312e;
    }

    .footer {
        background: #1b222e;
        padding: 5em 0 2em;
        color: #fff;
    }

    .footer .heading-section {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 27px;
        letter-spacing: 0.1em;
        color: #ee1c23 !important;
        font-family: "Overpass", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
            "Segoe UI Symbol";
    }

    .footer .block-21 .heading a {
        color: #fff !important;
    }

    .footer .block-21 .heading a:hover {
        color: #f7ca44 !important;
    }

    .footer .block-21 .meta a {
        color: gray !important;
    }

    .footer .block-21 .meta a:hover {
        color: #fff !important;
    }

    .footer a {
        color: #fff !important;
    }

    .footer a:hover {
        color: #ee1c23 !important;
    }

    .ftco-footer-social li {
        list-style: none;
        margin: 0 10px 10px 0;
        display: inline-block;
    }

    .ftco-footer-social li a {
        height: 60px;
        width: 60px;
        display: block;
        float: left;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        position: relative;
    }

    .ftco-footer-social li a span {
        position: absolute;
        font-size: 26px;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .ftco-footer-social li a:hover {
        color: #f7ca44;
    }

    .footer-small-nav>li {
        display: inline-block;
    }

    .footer-small-nav>li a {
        margin: 0 10px 10px 0;
    }

    .footer-small-nav>li a:hover,
    .footer-small-nav>li a:focus {
        color: #f7ca44;
    }

    #map {
        height: 400px;
        width: 100%;
    }

    @media (max-width: 991.98px) {
        #map {
            height: 300px;
        }
    }

    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .ftco-section-2 .section-2-blocks-wrapper .button {
        display: block;
        position: absolute;
        width: 100px;
        height: 100px;
        right: 0;
        margin-right: -50px;
        border-radius: 50%;
        background: #f7ca44;
        z-index: 100;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    @media (max-width: 991.98px) {
        .ftco-section-2 .section-2-blocks-wrapper .button {
            top: auto;
            bottom: 0 !important;
            margin-right: auto;
            right: auto;
            left: 50%;
            margin-bottom: -50px;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }
    }

    .ftco-section-2 .section-2-blocks-wrapper .button span {
        position: absolute;
        font-size: 30px;
        color: #fff;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-30%, -48%);
        -ms-transform: translate(-30%, -48%);
        transform: translate(-30%, -48%);
    }

    .ftco-section-2 .section-2-blocks-wrapper .text {
        position: relative;
        z-index: -1;
        padding: 15px;
    }

    @media (min-width: 768px) {
        .ftco-section-2 .section-2-blocks-wrapper .text {
            padding: 10% 7%;
        }
    }

    .ftco-section-2 .section-2-blocks-wrapper .text h3 {
        margin-bottom: 50px;
    }

    .ftco-section-2 .section-2-blocks-wrapper .img {
        background-position: center center;
        background-size: cover;
    }

    @media (max-width: 991.98px) {
        .ftco-section-2 .section-2-blocks-wrapper .img {
            height: 400px;
            margin-bottom: 70px;
        }
    }

    .section-2-blocks-wrapper-2 .text {
        position: relative;
        padding: 30px 15px;
    }

    @media (min-width: 768px) {
        .section-2-blocks-wrapper-2 .text {
            padding: 40px;
        }
    }

    .section-2-blocks-wrapper-2 .text h3 {
        margin-bottom: 30px;
    }

    .section-2-blocks-wrapper-2 .img,
    .section-2-blocks-wrapper-2 .image {
        background-position: center center;
        background-size: cover;
    }

    .section-2-blocks-wrapper-2 .quote {
        background: #97de95;
        background: #f7ca44;
        color: #000;
        width: 100%;
        font-size: 24px;
        padding: 80px !important;
    }

    .section-2-blocks-wrapper-2 .quote .author {
        display: block;
        font-size: 16px;
    }

    .section-2-blocks-wrapper-2 .image {
        height: 500px;
        margin-top: 0;
        margin-left: 0;
    }

    @media (min-width: 768px) {
        .section-2-blocks-wrapper-2 .image {
            margin-top: -70px;
            margin-left: -70px;
        }
    }

    .flip-container {
        margin-bottom: 50px;
        -webkit-perspective: 1000;
        -moz-perspective: 1000;
        -ms-perspective: 1000;
        perspective: 1000;
    }

    .flip-container:hover .back,
    .flip-container.hover .back {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    .flip-container:hover .front,
    .flip-container.hover .front {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .flip-container,
    .flip-container .front,
    .flip-container .back {
        width: 100%;
        height: 427px;
    }

    .flip-container .flipper {
        -webkit-transition: 0.6s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 0.6s;
        -moz-transition: 0.6s;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transition: 0.6s;
        transition: 0.6s;
        transform-style: preserve-3d;
        position: relative;
    }

    .flip-container .front,
    .flip-container .back {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 4px;
        -webkit-transition: 0.6s;
        -webkit-transform-style: preserve-3d;
        -webkit-transform: rotateY(0deg);
        -moz-transition: 0.6s;
        -moz-transform-style: preserve-3d;
        -moz-transform: rotateY(0deg);
        -o-transition: 0.6s;
        -o-transform-style: preserve-3d;
        -o-transform: rotateY(0deg);
        -ms-transition: 0.6s;
        -ms-transform-style: preserve-3d;
        -ms-transform: rotateY(0deg);
        transition: 0.6s;
        transform-style: preserve-3d;
        transform: rotateY(0deg);
        position: absolute;
        top: 0;
        left: 0;
    }

    .flip-container .front {
        background: lightgreen;
        z-index: 2;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .flip-container .front:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: -moz-linear-gradient(top,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        background: -webkit-linear-gradient(top,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        background: -o-linear-gradient(top,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        background: linear-gradient(to bottom,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#cc000000', GradientType=0);
    }

    .flip-container .front .box {
        position: absolute;
        bottom: 0;
        left: 20px;
        right: 20px;
        bottom: 20px;
    }

    .flip-container .front .box h2,
    .flip-container .front .box p {
        color: #fff;
        margin: 0;
        padding: 0;
        line-height: 1.5;
    }

    .flip-container .front .box h2 {
        font-size: 20px;
    }

    .flip-container .front .box p {
        font-size: 12px;
    }

    .flip-container .back {
        background: #fff;
        -webkit-box-shadow: 0 0 70px -10px rgba(0, 0, 0, 0.4);
        box-shadow: 0 0 70px -10px rgba(0, 0, 0, 0.4);
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .flip-container .back p {
        position: absolute;
        top: 40px;
        left: 0;
        right: 0;
        text-align: center;
        padding: 0 20px;
        font-size: 18px;
    }

    .flip-container .author {
        bottom: 0;
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
    }

    .flip-container .author .image {
        width: 40px;
    }

    .flip-container .author .image img {
        border-radius: 50%;
        max-width: 100%;
    }

    .flip-container .author .position {
        display: block;
        font-size: 12px;
    }

    @media (max-width: 991.98px) {
        .flip-container .back {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
        }

        .flip-container .front {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }
    }

    .image-popup {
        cursor: -webkit-zoom-in;
        cursor: -moz-zoom-in;
        cursor: zoom-in;
    }

    .mfp-with-zoom .mfp-container,
    .mfp-with-zoom.mfp-bg {
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }

    .mfp-with-zoom.mfp-ready .mfp-container {
        opacity: 1;
    }

    .mfp-with-zoom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    .mfp-with-zoom.mfp-removing .mfp-container,
    .mfp-with-zoom.mfp-removing.mfp-bg {
        opacity: 0;
    }

    .ftco-counter .ftco-number {
        display: block;
        font-size: 72px;
        font-weight: bold;
        color: #f7ca44;
    }

    .ftco-counter .ftco-label {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #b3b3b3;
    }

    .block-22 {
        padding: 3em 0;
    }

    .block-22 .heading {
        font-size: 30px;
        font-weight: 300;
    }

    .block-22 .subscribe .form-group {
        position: relative;
    }

    .block-22 .subscribe .email {
        height: 50px;
        border-radius: 30px;
        padding-left: 20px;
        padding-right: 180px;
    }

    .block-22 .subscribe .submit {
        position: absolute;
        top: 6px;
        padding-left: 30px;
        padding-right: 30px;
        right: 6px;
        border-radius: 30px;
        color: #fff;
    }

    .block-22 .subscribe .submit:hover {
        color: #000;
    }

    .block-21 figure {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
    }

    .block-21 figure img {
        border: 4px solid #fff;
        border-radius: 4px;
    }

    .block-21 .text .heading {
        font-size: 18px;
        font-weight: 300;
    }

    .block-21 .text .heading a {
        color: #000;
    }

    .block-21 .text .heading a:hover,
    .block-21 .text .heading a:active,
    .block-21 .text .heading a:focus {
        color: #f7ca44;
    }

    .block-21 .text .meta>div {
        display: inline-block;
        font-size: 12px;
        margin-right: 10px;
    }

    .block-21 .text .meta>div a {
        color: #cccccc;
    }

    .block-5 {
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 500px;
        position: relative;
        display: block;
        margin-bottom: 30px;
    }

    .block-5:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: -moz-linear-gradient(top,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        background: -webkit-linear-gradient(top,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        background: -webkit-gradient(linear,
                left top,
                left bottom,
                from(transparent),
                color-stop(18%, transparent),
                color-stop(99%, rgba(0, 0, 0, 0.8)),
                to(rgba(0, 0, 0, 0.8)));
        background: -o-linear-gradient(top,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        background: linear-gradient(to bottom,
                transparent 0%,
                transparent 18%,
                rgba(0, 0, 0, 0.8) 99%,
                rgba(0, 0, 0, 0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#cc000000', GradientType=0);
    }

    .block-5 .text {
        position: absolute;
        bottom: 0;
        padding: 20px 20px 10px 20px;
        -webkit-transition: 0.8s all ease;
        -o-transition: 0.8s all ease;
        transition: 0.8s all ease;
    }

    .block-5 .text:before {
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background: #fff;
        visibility: hidden;
        opacity: 0;
        height: 0;
        position: absolute;
        content: "";
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .block-5 .text .heading,
    .block-5 .text .subheading,
    .block-5 .text .post-meta,
    .block-5 .text .excerpt {
        z-index: 2;
        position: relative;
    }

    .block-5 .text .subheading {
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-size: 12px;
        margin-bottom: 5px;
        opacity: 0.6;
    }

    .block-5 .text .heading {
        color: #fff;
        margin: 0 0 10px 0;
        padding: 0;
        font-weight: bold;
        font-size: 20px;
        line-height: 1.2;
    }

    .block-5 .text .post-meta {
        line-height: 1.4;
        color: #fff;
        font-size: 12px;
        text-transform: uppercase;
    }

    .block-5 .text .post-meta span {
        display: inline-block;
        margin-right: 10px;
        margin-bottom: 10px;
        opacity: 0.6;
    }

    .block-5 .text .excerpt {
        line-height: 1.4;
        color: #fff;
    }

    .block-5:hover .text:before,
    .block-5:focus .text:before {
        visibility: visible;
        opacity: 1;
        height: 100%;
        background: #fff;
    }

    .block-5:hover .text .heading,
    .block-5:hover .text .subheading,
    .block-5:hover .text .post-meta,
    .block-5:focus .text .heading,
    .block-5:focus .text .subheading,
    .block-5:focus .text .post-meta {
        color: #000;
    }

    .block-6 .icon {
        margin-right: 30px;
        color: #ee1c23;
    }

    .block-6 .icon span:before {
        font-size: 50px;
    }

    .block-6 .icon span.bg-after:after {
        position: absolute;
        content: "";
        left: 10px;
        top: 5px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #fbe6a6;
        z-index: -1;
    }

    .block-6 .media-body .heading {
        font-size: 18px;
    }

    .block-6 .media-body p {
        color: #a2a2a2;
    }

    .block-6 .media-body p:last-child {
        margin-bottom: 0;
    }

    .block-13 .owl-stage-outer {
        padding-bottom: 7em;
    }

    .block-13 .owl-nav {
        position: relative;
        position: absolute;
        bottom: 0px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .block-13 .owl-nav .owl-prev,
    .block-13 .owl-nav .owl-next {
        position: relative;
        display: inline-block;
        padding: 20px;
        font-size: 30px;
    }

    .block-13 .owl-nav .owl-prev.disabled,
    .block-13 .owl-nav .owl-next.disabled {
        opacity: 0.2;
    }

    .block-10 {
        margin-bottom: 30px;
    }

    .block-10 .person-info {
        height: 75px;
    }

    .block-10 .person-info span {
        display: block;
    }

    .block-10 .person-info .name {
        font-size: 20px;
    }

    .block-10 .person-info .position {
        font-size: 14px;
    }

    @media (min-width: 768px) {
        .pricing-wrap {
            margin-top: -250px;
        }
    }

    .block-7 {
        margin-bottom: 30px;
        padding: 30px;
        -webkit-box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.11);
        box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.11);
        background: #fff;
    }

    @media (min-width: 768px) {
        .block-7 {
            padding: 40px;
        }
    }

    .block-7 .heading {
        font-size: 50px;
        line-height: 1;
        margin: 0;
        padding: 0;
    }

    .block-7 .heading-2 {
        font-size: 16px;
        font-weight: normal;
        text-transform: uppercase;
    }

    .block-7 .price {
        margin: 0;
        padding: 0;
        display: block;
    }

    .block-7 .price sup {
        font-size: 20px;
        top: -2em;
    }

    .block-7 .price .number {
        font-size: 80px;
    }

    .block-7 .excerpt {
        margin-bottom: 20px;
        color: #b3b3b3;
    }

    .block-7 .label2 {
        text-transform: uppercase;
    }

    .block-7 .pricing-text {
        margin-bottom: 0;
    }

    .block-7 .pricing-text,
    .block-7 .pricing-text li {
        padding: 0;
        margin: 0;
    }

    .block-7 .pricing-text li {
        list-style: none;
        margin-bottom: 10px;
        color: #b3b3b3;
    }

    .block-7 .pricing-text li strong {
        color: #000;
    }

    .block-8 .accordion-item .heading {
        font-size: 16px;
        font-weight: 400;
        padding: 10px 0;
    }

    .block-8 .accordion-item .heading>a {
        padding-left: 35px;
        position: relative;
        color: #000;
    }

    .block-8 .accordion-item .heading>a:before {
        width: 20px;
        height: 20px;
        line-height: 18px;
        border: 1px solid #ccc;
        text-align: center;
        font-size: 18px;
        top: 0.1em;
        left: 0;
    }

    .block-8 .accordion-item .heading>a[aria-expanded="true"]:before {
        font-family: "icomoon";
        position: absolute;
        content: "\e316";
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
        background: #f7ca44;
        color: #fff;
        border: 1px solid #f7ca44;
    }

    .block-8 .accordion-item .heading>a[aria-expanded="false"]:before {
        content: "\e313";
        color: #ccc;
        font-family: "icomoon";
        position: absolute;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .block-8 .accordion-item .body-text {
        font-size: 16px;
        padding: 5px 0;
        padding-left: 30px;
    }

    .block-4 .nonloop .owl-stage {
        padding-bottom: 2em;
    }

    .block-4 .nonloop .owl-item {
        -webkit-box-shadow: 0 7px 20px -5px rgba(0, 0, 0, 0.2);
        box-shadow: 0 7px 20px -5px rgba(0, 0, 0, 0.2);
    }

    .block-4 .nonloop .owl-nav {
        z-index: 2;
        position: absolute;
        width: 100%;
        bottom: -2px;
    }

    .block-4 .nonloop .owl-nav .owl-prev,
    .block-4 .nonloop .owl-nav .owl-next {
        opacity: 0.2;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
        position: absolute;
    }

    .block-4 .nonloop .owl-nav .owl-prev:hover,
    .block-4 .nonloop .owl-nav .owl-next:hover {
        opacity: 1;
    }

    .block-4 .nonloop .owl-nav .owl-prev.disabled,
    .block-4 .nonloop .owl-nav .owl-next.disabled {
        display: none;
    }

    .block-4 .nonloop .owl-nav .owl-prev span,
    .block-4 .nonloop .owl-nav .owl-next span {
        font-size: 30px;
    }

    .block-4 .nonloop .owl-nav .owl-prev {
        left: 50px;
    }

    .block-4 .nonloop .owl-nav .owl-next {
        right: 50px;
    }

    .block-4 .nonloop .owl-dots {
        bottom: -40px;
        position: absolute;
        width: 100%;
        text-align: center;
    }

    .block-4 .nonloop .owl-dots .owl-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        background: #ccc;
        border-radius: 50%;
        margin-right: 10px;
        margin-bottom: 10px;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .block-4 .nonloop .owl-dots .owl-dot.active {
        background: #f7ca44;
    }

    .contact-section {
        margin-top: -250px;
    }

    .contact-section .container {
        z-index: 2;
        position: relative;
        background: #fff !important;
        padding: 30px;
    }

    @media (min-width: 768px) {
        .contact-section .container {
            padding: 70px;
        }
    }

    .custom-pagination {
        width: 100%;
        text-align: center;
        display: inline-block;
    }

    .custom-pagination li {
        display: inline-block;
    }

    .custom-pagination .prev a,
    .custom-pagination .next a {
        font-size: 20px !important;
        line-height: 38px !important;
    }

    .custom-pagination li a,
    .custom-pagination .prev a,
    .custom-pagination .next a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        padding: 0;
        margin: 0;
        border-radius: 50% !important;
        font-size: 16px;
    }

    .custom-pagination li.active a,
    .custom-pagination .prev.active a,
    .custom-pagination .next.active a {
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        padding: 0;
        margin: 0;
        border-radius: 50% !important;
        font-size: 16px;
        background: #f7ca44;
        color: #fff;
    }

    .custom-pagination li.active a:hover,
    .custom-pagination li.active a:focus,
    .custom-pagination .prev.active a:hover,
    .custom-pagination .prev.active a:focus,
    .custom-pagination .next.active a:hover,
    .custom-pagination .next.active a:focus {
        color: #fff;
    }

    .custom-pagination .prev {
        float: left;
    }

    .custom-pagination .next {
        float: right;
    }

    /* Blog*/
    .post-info {
        font-size: 12px;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
        letter-spacing: 0.1em;
    }

    .post-info>div {
        display: inline-block;
    }

    .post-info>div .seperator {
        display: inline-block;
        margin: 0 10px;
        opacity: 0.5;
    }

    .tagcloud a {
        text-transform: uppercase;
        display: inline-block;
        padding: 4px 10px;
        margin-bottom: 7px;
        margin-right: 4px;
        border-radius: 4px;
        color: #000;
        border: 1px solid #ccc;
        font-size: 11px;
    }

    .tagcloud a:hover {
        border: 1px solid #000;
    }

    .comment-form-wrap {
        clear: both;
    }

    .comment-list {
        padding: 0;
        margin: 0;
    }

    .comment-list .children {
        padding: 50px 0 0 40px;
        margin: 0;
        float: left;
        width: 100%;
    }

    .comment-list li {
        padding: 0;
        margin: 0 0 30px 0;
        float: left;
        width: 100%;
        clear: both;
        list-style: none;
    }

    .comment-list li .vcard {
        width: 80px;
        float: left;
    }

    .comment-list li .vcard img {
        width: 50px;
        border-radius: 50%;
    }

    .comment-list li .comment-body {
        float: right;
        width: calc(100% - 80px);
    }

    .comment-list li .comment-body h3 {
        font-size: 20px;
    }

    .comment-list li .comment-body .meta {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.1em;
        color: #ccc;
    }

    .comment-list li .comment-body .reply {
        padding: 5px 10px;
        background: #e6e6e6;
        color: #000;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.1em;
        font-weight: 400;
        border-radius: 4px;
    }

    .comment-list li .comment-body .reply:hover {
        color: #fff;
        background: black;
    }

    .search-form {
        background: #f7f7f7;
        padding: 10px;
    }

    .search-form .form-group {
        position: relative;
    }

    .search-form .form-group input {
        padding-right: 50px;
    }

    .search-form .icon {
        position: absolute;
        top: 50%;
        right: 20px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .sidebar-box {
        margin-bottom: 30px;
        padding: 25px;
        font-size: 15px;
        width: 100%;
        float: left;
        background: #fff;
    }

    .sidebar-box *:last-child {
        margin-bottom: 0;
    }

    .sidebar-box h3 {
        font-size: 18px;
        margin-bottom: 15px;
    }

    .categories li,
    .sidelink li {
        position: relative;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px dotted #dee2e6;
        list-style: none;
    }

    .categories li:last-child,
    .sidelink li:last-child {
        margin-bottom: 0;
        border-bottom: none;
        padding-bottom: 0;
    }

    .categories li a,
    .sidelink li a {
        display: block;
    }

    .categories li a span,
    .sidelink li a span {
        position: absolute;
        right: 0;
        top: 0;
        color: #ccc;
    }

    .categories li.active a,
    .sidelink li.active a {
        color: #000;
        font-style: italic;
    }

    .section-heading .subheading-sm {
        margin-bottom: 30px;
        color: #999999;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        position: relative;
        display: inline-block;
        font-weight: 300;
    }

    .section-heading .subheading-sm:after {
        width: 80px;
        height: 2px;
        background: #999999;
        position: absolute;
        left: 120%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        content: "";
    }

    .section-heading .heading {
        font-size: 50px;
        line-height: 1.2;
        margin: 0 0 40px 0;
        padding: 0;
    }

    .block-32 {
        margin-top: -70px;
        z-index: 1;
        position: relative;
        background: #fff;
        padding: 30px;
        -webkit-box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
    }

    .block-32 .field-icon-wrap {
        position: relative;
    }

    .block-32 .field-icon-wrap .form-control {
        height: 52px !important;
        position: relative;
        padding-right: 40px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        color: #a6a6a6;
    }

    .block-32 .field-icon-wrap .icon {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 15px;
        z-index: 2;
    }

    .block-32 .field-icon-wrap select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
    }

    .block-32 .btn {
        height: 52px;
        color: #fff;
    }

    .block-31 .owl-nav {
        position: absolute;
        right: 50px;
        bottom: 130px;
    }

    .block-31 .owl-nav .owl-prev,
    .block-31 .owl-nav .owl-next {
        color: #fff;
        font-size: 20px;
        opacity: 1;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .block-31 .owl-nav .owl-prev:hover,
    .block-31 .owl-nav .owl-next:hover {
        opacity: 1;
    }

    .block-31 .owl-dots {
        position: absolute;
        bottom: 100px;
        right: 50px;
    }

    .block-31 .owl-dots .owl-dot {
        float: left;
        width: 40px;
        height: 2px;
        background: #fff;
        opacity: 0.3;
    }

    .block-31 .owl-dots .owl-dot.active {
        opacity: 1;
        background: #fff;
    }

    .block-30 {
        background-size: cover;
        background-color: #ccc;
        padding: 0;
        position: relative;
    }

    @media (max-width: 991.98px) {
        .block-30 {
            background-position: center center !important;
        }
    }

    .block-30 .author {
        margin-top: 30px;
        font-family: "Overpass", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
            "Segoe UI Symbol";
        font-size: 16px;
        display: block;
    }

    .block-30:before {
        background: #000;
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.4;
        z-index: 0;
    }

    .block-30.no-overlay:before {
        display: none;
    }

    .block-30,
    .block-30 .row {
        min-height: 700px;
        height: 100vh;
    }

    .block-30 .subheading-sm {
        margin-bottom: 30px;
        color: #fff;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        position: relative;
        display: inline-block;
        font-weight: 300;
    }

    .block-30 .subheading-sm:after {
        width: 80px;
        height: 2px;
        background: #fff;
        position: absolute;
        left: 120%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        content: "";
    }

    .block-30 .heading {
        color: #fff;
        font-size: 40px;
        line-height: 1.1;
        margin-bottom: 50px;
        font-family: "Dosis", sans-serif;
    }

    @media (min-width: 768px) {
        .block-30 .heading {
            font-size: 80px;
        }
    }

    @media (min-width: 992px) {
        .block-30 .heading {
            font-size: 80px;
        }
    }

    .block-30 .btn {
        background: #fff;
        border-radius: 0;
        border: 2px solid transparent;
        font-size: 14px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #999999;
        -webkit-box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.2);
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.2);
    }

    .block-30 .btn:hover {
        border-color: #fff;
        color: #fff;
    }

    .block-30.block-30-sm,
    .block-30.block-30-sm .row {
        min-height: 690px;
        height: 70vh;
    }

    .block-30.block-30-sm .heading {
        font-size: 70px;
        margin-bottom: 20px;
    }

    .block-30 .lead {
        color: #fff;
    }

    .block-23 ul,
    .block-23 ul li {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .block-23 ul li,
    .block-23 ul li>a {
        display: table;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .block-23 ul li .icon,
    .block-23 ul li .text {
        display: table-cell;
        vertical-align: top;
    }

    .block-23 ul li .icon {
        width: 28px;
        font-size: 18px;
        padding-top: 2px;
        color: #ee1c23;
    }

    .img-hover {
        position: relative;
        display: block;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .img-hover img {
        -webkit-transition: 0.3s ease all;
        -o-transition: 0.3s ease all;
        transition: 0.3s ease all;
    }

    .img-hover:before {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background: #f7ca44;
        opacity: 0;
        visibility: hidden;
        content: "";
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .img-hover .icon {
        position: absolute;
        z-index: 2;
        color: #fff;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, 100%);
        -ms-transform: translate(-50%, 100%);
        transform: translate(-50%, 100%);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.2s all ease;
        -o-transition: 0.2s all ease;
        transition: 0.2s all ease;
    }

    .img-hover:hover img {
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
    }

    .img-hover:hover:before {
        opacity: 0.8;
        visibility: visible;
    }

    .img-hover:hover .icon {
        opacity: 1;
        visibility: visible;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .block-47 .block-47-image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 70px;
        flex: 0 0 70px;
        display: block;
    }

    .block-47 .block-47-image img {
        border: 5px solid #fff;
        border-radius: 50%;
        -webkit-box-shadow: 0 8px 10px -2px rgba(0, 0, 0, 0.3);
        box-shadow: 0 8px 10px -2px rgba(0, 0, 0, 0.3);
    }

    .block-47 .block-47-quote {
        margin-left: 40px;
        padding: 30px;
        background: #fff;
        border-radius: 7px;
        position: relative;
        -webkit-box-shadow: 0 2px 30px -2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 30px -2px rgba(0, 0, 0, 0.1);
    }

    .block-47 .block-47-quote:before {
        content: "";
        z-index: 2;
        position: absolute;
        left: -15px;
        border-width: 0 20px 20px 0;
        border-style: solid;
        border-color: transparent #fff transparent transparent;
    }

    .block-47 .block-47-quote .block-47-quote-author {
        font-size: 14px;
        color: #666666;
    }

    .block-47.block-47-reverse .block-47-quote {
        margin-left: auto;
        margin-right: 40px;
    }

    .block-47.block-47-reverse .block-47-quote:before {
        left: 100%;
        border-width: 0 20px 20px 0;
        border-style: solid;
        border-color: transparent transparent #fff transparent;
    }

    .block-35 .nav {
        margin-bottom: 70px;
    }

    .block-35 .nav li {
        width: 33.33333%;
    }

    .block-35 .nav li a {
        cursor: pointer;
        padding: 40px;
        display: block;
        width: 100%;
        text-align: center;
        text-transform: uppercase;
        border-bottom: 2px solid #e6e6e6;
        color: #cccccc;
    }

    .block-35 .nav li a:hover {
        color: #000;
    }

    .block-35 .nav li a.active {
        color: #f7ca44;
        border-bottom: 2px solid #f7ca44;
    }

    .block-33 {
        background: #fff;
        padding: 20px;
        -webkit-box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
    }

    .block-33 .vcard .image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 60px;
        flex: 0 0 60px;
        margin-right: 20px;
    }

    .block-33 .vcard .image img {
        max-width: 100%;
        border-radius: 50%;
    }

    .block-33 .vcard .name-text .heading {
        line-height: 1.5;
        margin: 0;
        padding: 0;
        font-size: 18px;
        font-weight: 300;
    }

    .block-33 .vcard .name-text .meta {
        color: #a6a6a6;
        display: block;
        font-size: 14px;
    }

    .block-33 .text blockquote {
        padding: 0;
        margin-bottom: 0;
        border: none !important;
        font-size: 16px;
    }

    .block-33 .text blockquote p:last-child {
        margin-bottom: 0;
    }

    .block-34,
    .block-3 {
        background: #fff;
        -webkit-box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
    }

    .block-34 .image img,
    .block-3 .image img {
        max-width: 100%;
    }

    .block-34 .text,
    .block-3 .text {
        padding: 30px;
    }

    .block-34 .text .heading,
    .block-3 .text .heading {
        font-size: 24px;
        font-weight: 300;
    }

    .block-34 .text .price,
    .block-3 .text .price {
        font-size: 40px;
    }

    .block-34 .text .price sup,
    .block-34 .text .price sub,
    .block-3 .text .price sup,
    .block-3 .text .price sub {
        font-size: 16px;
    }

    .block-34 .text .price sup,
    .block-3 .text .price sup {
        top: -1em;
    }

    .block-34 .text .price sub,
    .block-3 .text .price sub {
        bottom: 0em;
    }

    .block-34 .text .specs,
    .block-34 .text .specs li,
    .block-3 .text .specs,
    .block-3 .text .specs li {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .block-34 .text .specs li,
    .block-3 .text .specs li {
        color: gray;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .block-34 .text .specs li strong,
    .block-3 .text .specs li strong {
        color: #000;
    }

    .block-3 .text,
    .block-3 .image {
        width: 100%;
        padding: 10% 7%;
    }

    @media (min-width: 768px) {

        .block-3 .text,
        .block-3 .image {
            width: 50%;
            padding: 10% 7%;
        }
    }

    .block-3 .text .subheading {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #a3c2d1;
    }

    .block-3 .text .heading {
        font-size: 30px;
        margin-bottom: 30px;
    }

    .block-3 .text p:last-child {
        margin-bottom: 0;
    }

    .block-3 .image {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    @media (max-width: 767.98px) {
        .block-3 .image {
            height: 300px;
        }
    }

    #blog .block-3 .text {
        padding: 4%;
    }

    #blog .block-3 .heading {
        margin-bottom: 0;
    }

    #blog .block-3 .heading a {
        color: #000;
    }

    #blog .block-3 .heading a:hover {
        color: #f7ca44;
    }

    #blog .block-3 .meta {
        font-size: 16px;
        color: #999999;
    }

    #blog .block-3 .meta .sep {
        display: inline-block;
        padding-left: 5px;
        padding-right: 5px;
    }

    #blog .block-3 .meta a {
        color: #999999;
    }

    #blog .block-3 .meta a:hover {
        color: #4d4d4d;
    }

    .block-38 .block-38-header .block-38-heading {
        font-size: 18px;
        color: #000;
        margin: 0;
        font-weight: 300;
    }

    .block-38 .block-38-header .block-38-subheading {
        color: #b3b3b3;
        margin: 0 0 20px 0;
        text-transform: uppercase;
        font-size: 15px;
    }

    .block-38 .block-38-header img {
        width: 150px;
        border-radius: 7px;
        margin-bottom: 20px;
    }

    .img-shadow {
        border: 5px solid #fff;
        -webkit-box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.4);
        box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.4);
    }

    .bcrumbs {
        color: rgba(255, 255, 255, 0.4);
    }

    .bcrumbs a {
        color: #fff;
    }

    .bcrumbs .sep {
        color: rgba(255, 255, 255, 0.5);
    }

    #ftco-loader {
        position: fixed;
        width: 96px;
        height: 96px;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.9);
        -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
        box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
        border-radius: 16px;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity 0.2s ease-out, visibility 0s linear 0.2s;
        -o-transition: opacity 0.2s ease-out, visibility 0s linear 0.2s;
        transition: opacity 0.2s ease-out, visibility 0s linear 0.2s;
        z-index: 1000;
    }

    #ftco-loader.fullscreen {
        padding: 0;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
        background-color: #fff;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    #ftco-loader.show {
        -webkit-transition: opacity 0.4s ease-out, visibility 0s linear 0s;
        -o-transition: opacity 0.4s ease-out, visibility 0s linear 0s;
        transition: opacity 0.4s ease-out, visibility 0s linear 0s;
        visibility: visible;
        opacity: 1;
    }

    #ftco-loader .circular {
        -webkit-animation: loader-rotate 2s linear infinite;
        animation: loader-rotate 2s linear infinite;
        position: absolute;
        left: calc(50% - 24px);
        top: calc(50% - 24px);
        display: block;
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    #ftco-loader .path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        -webkit-animation: loader-dash 1.5s ease-in-out infinite;
        animation: loader-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
    }

    @-webkit-keyframes loader-rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes loader-rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes loader-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -35px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -136px;
        }
    }

    @keyframes loader-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -35px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -136px;
        }
    }


    /* Custom Css */

    .logo_main {
        height: 60px !important;
    }

    /* Show the dropdown on hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        /* Remove default margin-top */
    }

    .nav-item.dropdown .dropdown-menu {
        margin-top: 0;
        /* Ensure no margin when not hovered */
    }

    /* Hide the dropdown initially */
    .dropdown-submenu .dropdown-menu {
        display: none !important;
        position: absolute !important;
        left: 100% !important;
        top: 0 !important;
        margin-top: -1px !important;
    }

    /* Show the dropdown on hover */
    .dropdown-submenu:hover .dropdown-menu {
        display: block !important;
    }

    /* Ensure the "Past Events" dropdown is aligned properly */
    .dropdown-submenu {
        position: relative !important;
    }

    .dropdown-menu .dropdown-submenu:hover>.dropdown-menu {
        display: block !important;
    }

    .main-heading {
        color: #ee1c23 !important;
        font-size: 80px !important;
        font-weight: bold !important;
        line-height: 70px !important;
        margin-top: 0 !important;
        text-transform: uppercase !important;

        /* Animation */
        animation: slide-in-right 1s ease-out forwards;
        /* Adjust duration and easing */
    }

    .main-heading-text {
        color: #fff;
        font-size: 50px !important;
        font-weight: 200 !important;
        text-transform: capitalize !important;

        /* Animation */
        animation: slide-in-right 1s ease-out forwards;
        /* Adjust duration and easing */
        animation-delay: 0.2s;
        /* Optional: Add delay for staggered effect */
    }

    /* Keyframes for slide-in from right */
    @keyframes slide-in-right {
        0% {
            opacity: 0;
            transform: translateX(100%);
            /* Start from right off the screen */
        }

        100% {
            opacity: 1;
            transform: translateX(0);
            /* End at original position */
        }
    }

    .main-text-color {
        color: #25276d !important;
    }

    .frp-institute-section {
        padding: 50px 0 70px !important;
    }

    .section-title {
        font-size: 32px !important;
        font-weight: 600 !important;
        margin-bottom: 40px;
    }

    .custom-card {
        background-color: #f9f9f9 !important;
        border: 1px solid #eaeaea !important;
        padding: 30px !important;
        text-align: center !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05) !important;
        height: 100%;
        /* Ensures consistent height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .custom-card:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
        background-color: #25276d !important;
        color: #fff !important;
    }

    .custom-card:hover .card-icon,
    .custom-card:hover .card-body h3,
    .custom-card:hover .card-body p {
        color: #fff !important;
    }

    .card-link {
        text-decoration: none;
        /* Removes underline from the entire card */
        color: inherit;
        /* Inherits text color */
    }

    .card-icon {
        font-size: 50px !important;
        color: #25276d !important;
    }

    .card-title {
        font-size: 24px !important;
        font-weight: 500 !important;
        margin-bottom: 15px !important;
    }

    .custom-card p {
        font-size: 16px !important;
        color: #25276d !important;
        text-align: left !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .row {
        display: flex;
    }

    .col-md-4 {
        display: flex;
        flex-direction: column;
    }

    .card-link {
        height: 100%;
        /* Ensures the link occupies the full height of the card */
        display: block;
    }

    .custom-card {
        height: 100%;
        /* Set consistent height for all cards */
    }

    .media {
        padding: 2em;
        background: #1b222e;
        margin-bottom: 1em;
    }

    .media-body .heading,
    .media-body p {
        color: #fff !important;
    }

    .frp-institute-section {
        background-color: #eeeeee !important;
    }

    .sticky-section {
        position: sticky !important;
        top: 20px !important;
        /* Adjust this value to the distance from the top */
    }
</style>
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

<!-- Second Section End Here -->
<div class="mt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="<?= BASE_URL ?>assets/images/frp-images/side-image.png" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-md-6 welcome-text">
                <h2 class="display-4 mb-3 main-text-color">Who Are We?</h2>
                <p class="lead main-text-color">FRP INSTITUTE is a professional society for those who are concerned with FRP Composites bringing together under one platform.</p>
                <p class="mb-0"><a href="#" class="btn btn-dark px-3 py-2 text-light">Learn More</a></p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <p class="lead main-text-color text-center">FRP Institute is a registered non profit professional society based in Chennai, India. This organization was formed in 1999 and has members ranging from large multinational corporations to small fabricators spread all over the country. The member list include raw material suppliers, fabricators, machinery manufacturers, scientists, composite specialists, consultants, designers, defence laboratories, educational institutions etc. The Institute works in close collaboration with the industries and institutions for upgrading the Composites Technology and to promote the growth of the Indian composites industry.</p>
            </div>
        </div>
    </div>
</div>
<!-- Second Section End Here -->

<!-- Service section starts here -->
<div class="site-section ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 mx-auto">
                <h2 class="section-title text-center">Services</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-school"></span></div> <!-- Updated icon -->
                    <div class="media-body">
                        <h3 class="heading font-weight-bold">Skill Development</h3>
                        <p>We provide training programs designed to enhance the skills of individuals, preparing them for the challenges of the industry.</p> <!-- Updated text -->
                        <p><a href="skill-development.php" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-briefcase"></span></div> <!-- Updated icon -->
                    <div class="media-body">
                        <h3 class="heading font-weight-bold">Support to Industry</h3>
                        <p>We collaborate with various industries, offering them innovative solutions and resources to enhance their operations.</p> <!-- Updated text -->
                        <p><a href="support-to-industry.php" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-contacts"></span></div> <!-- Updated icon -->
                    <div class="media-body">
                        <h3 class="heading font-weight-bold">Collaborations</h3>
                        <p>Our partnerships with organizations and educational institutions drive groundbreaking research and development projects.</p> <!-- Updated text -->
                        <p><a href="collaborations.php" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-people"></span></div> <!-- Updated icon -->
                    <div class="media-body">
                        <h3 class="heading font-weight-bold">Members</h3>
                        <p>Join our growing community of professionals and experts committed to advancing technology and innovation.</p> <!-- Updated text -->
                        <p><a href="members.php" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Service section ends here -->

<section class="frp-institute-section ">
    <div class="container">
        <h2 class="section-title text-center">About FRP Institute</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="objectives.php" class="card-link">
                    <div class="card custom-card">
                        <div class="card-icon">
                            <span class="ion-ios-bookmarks"></span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Objectives</h3>
                            <p>Our objectives are to foster growth in FRP technology, promote research and development, and engage with industry experts to drive innovation.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="administration.php" class="card-link">
                    <div class="card custom-card">
                        <div class="card-icon">
                            <span class="ion-ios-people"></span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Administration</h3>
                            <p>The institute is led by a team of experienced professionals with a wealth of knowledge in both academia and industry. Our administration is dedicated to ensuring smooth operations and fostering collaborations.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="resource-persons.php" class="card-link">
                    <div class="card custom-card">
                        <div class="card-icon">
                            <span class="ion-ios-person"></span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Resource Persons</h3>
                            <p>Our resource persons include subject matter experts and industry leaders who provide guidance, share insights, and contribute to the success of our programs and initiatives.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Other company  start here -->
<div class="featured-section overlay-color-2">

    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-5 mb-md-0">
                <iframe src="https://snazzymaps.com/embed/113092" width="100%" height="400px" style="border:none;"></iframe>
            </div>

            <div class="col-md-6 pl-md-5">
                <?php include('./include/contact-form.php'); ?>
            </div>
        </div>
    </div>

</div>
<!-- other comapnies end here -->
<?php include('./include/layouts/footer.php'); ?>