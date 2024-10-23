</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
            <img class="logo_main" src="<?php echo BASE_URL; ?>assets/images/frp-images/logo_main.png" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="./index.html" class="nav-link">Home</a></li>
                
                <!-- Events dropdown -->
                <li class="nav-item dropdown">
                    <a href="<?php echo BASE_URL; ?>events.php" class="nav-link dropdown-toggle" id="eventsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
                    <div class="dropdown-menu" aria-labelledby="eventsDropdown">
                        <a class="dropdown-item" href="<?= BASE_URL?>upcoming-events.php">Upcoming Events</a>
                        
                        <!-- Past Events dropdown with hover effect -->
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="<?= BASE_URL?>upcoming-events.php">Past Events</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>webinar.php">Past Webinar PPT</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="<?php echo BASE_URL; ?>download.php" class="nav-link">Download</a></li>
                <li class="nav-item"><a href="<?php echo BASE_URL; ?>contact-us.php" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>



