<?php
$galleryCategories = [
    "Panchratna Overseas" => [
        "images/panchratnaContent/Infrastructure/POPL/gallery-1.jpg",
        "images/panchratnaContent/Infrastructure/POPL/gallery-2.jpg",
        "images/panchratnaContent/Infrastructure/POPL/gallery-3.jpg"
    ],
    "Panchratna Steel" => [
        "images/panchratnaContent/Infrastructure/Panchratna_Steel/gallery-1.jpg",
        "images/panchratnaContent/Infrastructure/Panchratna_Steel/gallery-2.jpg",
        "images/panchratnaContent/Infrastructure/Panchratna_Steel/gallery-3.jpg"
    ],
    "Lakshya Steel" => [
        "images/panchratnaContent/Infrastructure/Lakshya_Steel/gallery-1.jpg",
        "images/panchratnaContent/Infrastructure/Lakshya_Steel/gallery-2.jpg",
        "images/panchratnaContent/Infrastructure/Lakshya_Steel/gallery-3.jpg",
        "images/panchratnaContent/Infrastructure/Lakshya_Steel/gallery-4.jpg"
    ],
    "Factory Unit 1" => [
        "images/panchratnaContent/Infrastructure/Factory/Unit-1/gallery-1.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-1/gallery-2.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-1/gallery-3.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-1/gallery-4.jpg"
    ],
    "Factory Unit 2" => [
        "images/panchratnaContent/Infrastructure/Factory/Unit-2/gallery-1.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-2/gallery-2.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-2/gallery-3.jpg"
    ],
    "Factory Unit 3" => [
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-1.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-2.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-3.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-4.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-5.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-6.jpg",
        "images/panchratnaContent/Infrastructure/Factory/Unit-3/gallery-7.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php $page_title = "Infrastructure - Panchratna Overseas";
    $page_description = "Learn about Panchratna Overseas";
    include 'headConfig.php';
    ?>
</head>

<body>

    <!-- Preloader Start -->
    <?php include 'preloader.php'; ?>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include 'nav.php'; ?>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="page-header page-header-infrastructure parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Infrastructure</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Infrastructure</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Photo Gallery Section Start -->
    <div class="page-gallery">
        <div class="container">
            <?php foreach ($galleryCategories as $category => $images): ?>
                <div class="category-section mb-5">
                    <h3 class="mb-4"><?php echo htmlspecialchars($category); ?></h3>
                    <div class="row gallery-items page-gallery-box">
                        <?php foreach ($images as $index => $image): ?>
                            <div class="col-lg-4 col-6">
                                <!-- image gallery start -->
                                <div class="photo-gallery wow fadeInUp" data-wow-delay="<?php echo 0.2 * $index; ?>s"
                                    data-cursor-text="View">
                                    <a href="<?php echo $image; ?>">
                                        <figure class="image-anime">
                                            <img src="<?php echo $image; ?>" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- image gallery end -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Photo Gallery Section End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <?php include 'scriptsImport.php'; ?>
</body>

</html>