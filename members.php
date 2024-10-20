<?php include('./include/layouts/headerfirst.php'); ?>

<?php
// Corporate members array
$corporate_members = [
    [
        'cm' => 'CM 01',
        'company' => 'Owens Corning India Pvt Ltd',
        'contact' => 'Mr. Jitendra Godse'
    ],
    [
        'cm' => 'CM 02',
        'company' => 'Saint Gobain Vetrotex India Limited (Now Owens Corning India Pvt Ltd)',
        'contact' => ''
    ],
    [
        'cm' => 'CM 03',
        'company' => 'Reliance Industries Ltd. (Composites Business)',
        'contact' => ''
    ],
    [
        'cm' => 'CM 04',
        'company' => 'INEOS (Formerly Ashland India Private Limited)',
        'contact' => ''
    ],
    [
        'cm' => 'CM 05',
        'company' => 'Polynt Reichhold (Formerly Reichhold India Pvt Ltd)',
        'contact' => ''
    ],
    [
        'cm' => 'CM 06',
        'company' => 'Diab Core Materials Private Limited',
        'contact' => 'Mr. Gajendra Khatavkar, Regional Manager- Wind Energy (India/ Middle East)'
    ]
];

// Donor members array
$donor_members = [
    [
        'dm' => 'DM 01',
        'company' => 'DEVI POLYMERS PVT LTD',
        'contact' => 'Mr. R. RAMESH',
        'email' => 'ramesh@xlweb.com, ramesh_rr04@yahoo.co.in'
    ],
    [
        'dm' => 'DM 02',
        'company' => 'SRF LTD',
        'contact' => 'MANAGING DIRECTOR',
        'email' => ''
    ],
    [
        'dm' => 'DM 03',
        'company' => 'NAPTHA RESINS & CHEMICALS PVT LIMITED',
        'contact' => 'Mr. NARENDRA MALIK',
        'email' => 'info@naptharesins.com'
    ],
    [
        'dm' => 'DM 04',
        'company' => 'L. M. Glasfiber (I) Ltd',
        'contact' => '',
        'email' => ''
    ],
    [
        'dm' => 'DM 05',
        'company' => 'M/s. KROMATIKS & INSULANTS P. LTD.',
        'contact' => 'Mr. TARUN DATTA',
        'email' => 'ratna@md3.vsnl.net.in'
    ],
    [
        'dm' => 'DM 06',
        'company' => 'Permali Wallace Private Limited',
        'contact' => 'Mr. Mihir Merchant',
        'email' => 'permali@vsnl.com, permali@sancharnet.in, mihir.merchant@permaliwallace.com'
    ],
    [
        'dm' => 'DM 07',
        'company' => 'Uniglass Industries Private Limited',
        'contact' => 'Mr. K.G.Ramesh',
        'email' => 'info@uniglassindia.com, uniglass@blr.vsnl.net.in',
        'website' => 'www.uniglassindia.com'
    ],
    [
        'dm' => 'DM 08',
        'company' => 'Advanced Composites Programme',
        'contact' => 'Mr. Soumitra Biswas',
        'email' => 'biswas@nic.in'
    ],
    [
        'dm' => 'DM 09',
        'company' => 'MECHEMCO',
        'contact' => 'Mr. Pradip Thakkar',
        'email' => 'pradipthakkar@mechemco.com, info@mechemco.com, mechemco@vsnl.com',
        'website' => 'www.mechemco.com'
    ],
    [
        'dm' => 'DM 10',
        'company' => 'Aztech Composite Pvt. Ltd',
        'contact' => 'Mr. J K Trivedi',
        'email' => 'jktrivedi@aztechcomposite.com',
        'website' => 'www.aztechcomposite.com'
    ]
];
$patron_members = [
    [
        'pm' => 'PM 01',
        'company' => 'Pentair Water India Private Ltd',
        'contact' => 'Dr. Gopi Suri Babu',
        'email' => 'ssapra@pentairwater.com, gbabu@pentairwater.com'
    ],
    [
        'pm' => 'PM 02',
        'company' => 'REVEX INDUSTRIES LTD',
        'contact' => '',
        'email' => ''
    ],
    [
        'pm' => 'PM 03',
        'company' => 'Sintex Industries Ltd',
        'contact' => '',
        'email' => 'svenkat@sintex.co.in'
    ],
    [
        'pm' => 'PM 04',
        'company' => 'AMRITHA INSTITUTE OF TECHNOLOGY AND SCIENCE',
        'contact' => 'Prof. R. SUBBA RAO',
        'email' => 'polymer@amrita.edu, rr_subba@amrita.edu, vv_ray@mail.amrita.edu'
    ],
    [
        'pm' => 'PM 05',
        'company' => 'Bayer Material Science Pvt. Ltd.',
        'contact' => 'Mr. Mohit Goyal',
        'email' => 'mohit.goyal@bayerbms.com'
    ],
    [
        'pm' => 'PM 06',
        'company' => 'Manidhi Fibro Composites Pvt ltd',
        'contact' => 'Mr. Pradeep Kumar Aswani',
        'email' => 'aswani.pradeep@gmail.com'
    ],
    [
        'pm' => 'PM 07',
        'company' => 'EXPO MACHINE TOOLS PVT LTD',
        'contact' => 'MR. VAIBHAV AGGARWAL',
        'email' => 'expomachinetools@gmail.com'
    ],
    [
        'pm' => 'PM 08',
        'company' => 'FRP SERVICES & Co.INDIA PVT LTD',
        'contact' => 'Mr. SAURABH DESAI',
        'email' => 'sdesai@frp.co.jp'
    ],
    [
        'pm' => 'PM 09',
        'company' => 'HINDALCO INDUSTRIES LTD',
        'contact' => 'Mr. SUMAN BAL',
        'email' => 'suman.b@adityabirla.com'
    ],
    [
        'pm' => 'PM 10',
        'company' => 'ALTEM TECHNOLOGIES (P) LTD.',
        'contact' => 'Mr. PRASAD RODAGI',
        'email' => 'enquiry@altem.com'
    ],
    [
        'pm' => 'PM 11',
        'company' => 'TWIN ENGINEERS PVT LTD',
        'contact' => 'Ms. AISHWARYA ASHOK DESHMUKH',
        'email' => 'aishwarya@twinengineers.com'
    ],
    [
        'pm' => 'PM 12',
        'company' => 'PRATHAMESH INDUSTRIES',
        'contact' => 'Mr. CHINMAY R. SUKHANTANKAR',
        'email' => 'marketing@prathameshindustries.co.in, Chinmay.sukhatankar@gmail.com'
    ]
];
?>

<title>FRP Institute</title>
<meta name="description" content="FRP Institute.">
<meta name="keywords" content="FRP Institute">

<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php include('./include/layouts/headersecond.php'); ?>

<!-- Main Section Start Here -->
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31">
        <!-- Slider Content -->
        <div class="block-30 block-30-sm item" style="background-image: url('<?php BASE_URL; ?>assets/images/frp-images/background/bg1.png');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="main-heading mb-3">Frp Institute</h2>
                        <h3 class="main-heading-text">Promotes Indian <br> Composites <br> Industry</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Additional slides -->
    </div>
</div>

<!-- Corporate and Donor Members Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="corporate-members-tab" data-toggle="tab" data-target="#corporate-members" type="button" role="tab" aria-controls="corporate-members" aria-selected="true">Corporate Members</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="donor-members-tab" data-toggle="tab" data-target="#donor-members" type="button" role="tab" aria-controls="donor-members" aria-selected="false">Donor Members</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="patron-members-tab" data-toggle="tab" data-target="#patron-members" type="button" role="tab" aria-controls="patron-members" aria-selected="false">Patron Members</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="life-member-tab" data-toggle="tab" data-target="#life-member" type="button" role="tab" aria-controls="life-member" aria-selected="false">Life Members</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- Corporate Members Tab -->
                        <div class="tab-pane fade show active" id="corporate-members" role="tabpanel" aria-labelledby="corporate-members-tab">
                            <div class="container my-4">
                                <div class="row">
                                    <?php foreach ($corporate_members as $corporate_member): ?>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title main-text-color"><?= htmlspecialchars($corporate_member['cm']) ?></h5>
                                                    <p class="card-text main-text-color"><?= htmlspecialchars($corporate_member['company']) ?></p>
                                                    <?php if (!empty($corporate_member['contact'])): ?>
                                                        <p class="card-text main-text-color"><strong>Contact:</strong> <?= htmlspecialchars($corporate_member['contact']) ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Donor Members Tab -->
                        <div class="tab-pane fade" id="donor-members" role="tabpanel" aria-labelledby="donor-members-tab">
                            <div class="container my-4">
                                <div class="row">
                                    <?php foreach ($donor_members as $donor_member): ?>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title main-text-color"><?= htmlspecialchars($donor_member['dm']) ?></h5>
                                                    <p class="card-text main-text-color"><?= htmlspecialchars($donor_member['company']) ?></p>
                                                    <p class="card-text main-text-color"><strong>Contact:</strong> <?= htmlspecialchars($donor_member['contact']) ?></p>
                                                    <?php if (!empty($donor_member['email'])): ?>
                                                        <p class="card-text main-text-color"><strong>Email:</strong> <?= htmlspecialchars($donor_member['email']) ?></p>
                                                    <?php endif; ?>
                                                    <?php if (!empty($donor_member['website'])): ?>
                                                        <p class="card-text main-text-color"><strong>Website:</strong> <a href="http://<?= htmlspecialchars($donor_member['website']) ?>" target="_blank"><?= htmlspecialchars($donor_member['website']) ?></a></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="patron-members" role="tabpanel" aria-labelledby="patron-members-tab">
                            <div class="container my-4">
                                <div class="row">
                                    <?php foreach ($patron_members as $patron_member): ?>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title main-text-color"><?= htmlspecialchars($patron_member['pm']) ?></h5>
                                                    <p class="card-text main-text-color"><?= htmlspecialchars($patron_member['company']) ?></p>
                                                    <?php if (!empty($patron_member['contact'])): ?>
                                                        <p class="card-text main-text-color"><strong>Contact:</strong> <?= htmlspecialchars($patron_member['contact']) ?></p>
                                                    <?php endif; ?>
                                                    <?php if (!empty($patron_member['email'])): ?>
                                                        <p class="card-text main-text-color"><strong>Email:</strong> <?= htmlspecialchars($patron_member['email']) ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="life-member" role="tabpanel" aria-labelledby="life-member-tab">
                            <div class="container my-4">
                                <div class="row">
                                    <?php foreach ($life_members as $life_member): ?>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title main-text-color"><?= htmlspecialchars($life_member['pm']) ?></h5>
                                                    <p class="card-text main-text-color"><?= htmlspecialchars($life_member['company']) ?></p>
                                                    <?php if (!empty($life_member['contact'])): ?>
                                                        <p class="card-text main-text-color"><strong>Contact:</strong> <?= htmlspecialchars($life_member['contact']) ?></p>
                                                    <?php endif; ?>
                                                    <?php if (!empty($life_member['email'])): ?>
                                                        <p class="card-text main-text-color"><strong>Email:</strong> <?= htmlspecialchars($life_member['email']) ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./include/layouts/footer.php'); ?>