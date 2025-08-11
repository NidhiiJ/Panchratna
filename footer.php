<?php
$company_info = [
    'registered_address' => [
        'line1' => 'SHOP NO 24/28 ,GROUND FLOOR ,',
        'line2' => 'PLOT-22/24, ABBAS MANSION,',
        'line3' => '4TH KUMBARDWADA GIRGAON ,',
        'line4' => 'MAHARASHTRA, INDIA'
    ],

    'factory_address' => [
        'line1' => 'PLOT NO.4B, FOSSBERRY ROAD,',
        'line2' => 'SEWRI, MUMBAI, MAHARASHTRA,',
        'line3' => 'INDIA, 400015'
    ],
    'phones' => ['+91 9082603083', '+22 6743 7736'],
    'email' => 'sales@panchratnaoverseas.com'
];

// Social media links
$social_links = [
    'linkedin' => '#',
    'twitter' => 'https://x.com/P_O_P_L',
    'facebook' => 'https://www.facebook.com/profile.php?id=61579134723536',
    'instagram' => '#'
];

// Quick links
$quick_links = [
    'About Us' => 'about.php',
    'Products' => 'products.php',
    'Industries we serve' => 'industries-we-serve.php',
    'Infrastructure' => 'infrastructure.php'
];
?>

<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-6 col-md-12">
                <div class="about-footer">
                    <div class="footer-logo">
                        <img src="images/panchratnaContent/logo.svg" alt="Logo">
                    </div>
                </div>
                <div class="footer-social-links d-flex mt-4 mb-4">
                    <ul>
                        <li><a href="<?php echo $social_links['linkedin']; ?>"><i
                                    class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $social_links['twitter']; ?>"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li><a href="<?php echo $social_links['facebook']; ?>"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $social_links['instagram']; ?>"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-4 col-6">
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <?php foreach ($quick_links as $text => $url): ?>
                            <li><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-4 col-12">
                <div class="footer-links">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <strong>Registered Address:</strong><br>
                            <?php
                            echo implode('<br>', array_map(function ($line) {
                                return ucwords(strtolower($line));
                            }, $company_info['registered_address']));
                            ?>
                        </li>
                        <li>
                            <strong>Factory Address:</strong><br>
                            <?php
                            echo implode('<br>', array_map(function ($line) {
                                return ucwords(strtolower($line));
                            }, $company_info['factory_address']));
                            ?>
                        </li>
                        <li>
                            <strong>GSTIN</strong> : 27AAPCP6393R1Z5
                        </li>
                        <li>
                            <strong>IEC</strong> : AAPCP6393R
                        </li>
                        <?php foreach ($company_info['phones'] as $phone): ?>
                            <li><img src="images/panchratnaContent/call.svg" /> <?php echo $phone; ?></li>
                        <?php endforeach; ?>
                        <li>
                            <img src="images/panchratnaContent/mail.svg" />
                            <a href="mailto:<?php echo $company_info['email']; ?>">
                                <?php echo strtolower($company_info['email']); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="footer-copyright-text">
                        <p>Copyright © <?php echo date('Y'); ?> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->