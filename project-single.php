<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php $page_title = "Products - Panchratna Overseas";
    $page_description = "Learn about Panchratna Overseas";
    include 'headConfig.php';
    ?>
</head>

<body>
    <!-- Data Array Start -->
    <?php include 'products-data.php'; ?>
    <!-- Data Array End -->

    <!-- Preloader Start -->
    <?php include 'preloader.php'; ?>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include 'nav.php'; ?>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header-no-bg parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box page-header-no-bg-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Flat Bars</h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Product Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Product Single Content Start -->
                    <div class="project-single-content">
                        <!-- Product Single Image Start -->
                        <div class="project-single-image">
                            <figure class="image-anime reveal">
                                <img src="images/project-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Product Single Image End -->

                        <!-- Product Entry Start -->
                        <div class="project-entry">
                            <!-- Product Info Start -->
                            <div class="project-info">
                                <h2 class="text-anime-style-2">Flat Bar <span>Supplier & Stockist in India</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Flat bars are widely used in industrial
                                    and structural applications due to their strength, versatility, and ease of
                                    fabrication. These bars can be easily cut, welded, and machined into various
                                    components. In addition to excellent machinability, flat bars offer good corrosion
                                    resistance, making them suitable for both indoor and outdoor use.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Flat bars are commonly used in industries
                                    such as automotive, construction, shipbuilding, fabrication, heavy equipment, and
                                    infrastructure. Their durability and adaptability make them ideal for support
                                    structures, brackets, frames, and custom machine parts.</p>
                            </div>
                            <!-- Product Info End -->

                            <!-- Size Chart Start -->
                            <div class="size-chart-container">
                                <h3>Flat Bar Size Chart</h3>
                                <div class="size-chart-table">
                                    <div class="size-chart-row size-chart-header">
                                        <div>Width (mm)</div>
                                        <div>Thickness (mm)</div>
                                        <div>Length (m)</div>
                                    </div>

                                    <div class="size-chart-row">
                                        <div>20</div>
                                        <div>3 to 12</div>
                                        <div>6</div>
                                    </div>

                                    <div class="size-chart-row">
                                        <div>25</div>
                                        <div>3 to 16</div>
                                        <div>6</div>
                                    </div>

                                    <div class="size-chart-row">
                                        <div>30</div>
                                        <div>3 to 20</div>
                                        <div>6</div>
                                    </div>

                                    <div class="size-chart-row">
                                        <div>40 to 150</div>
                                        <div>3 to 25</div>
                                        <div>6</div>
                                    </div>

                                    <!-- Add more rows as needed -->
                                </div>
                            </div>

                            <!-- Size Chart End -->
                        </div>
                        <!-- Product Entry End -->
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Product Sidebar Start -->
                    <div class="project-sidebar">
                        <!-- Product detail Box Start -->
                        <div class="project-detail-box">
                            <!-- Product Detail Title Start -->
                            <div class="project-detail-title">
                                <h3>Other Products</h3>
                            </div>
                            <!-- Product Detail Title End -->

                            <div class="project-detail-list">
                                <!-- Product Detail Item Start -->
                                <?php foreach ($products as $product): ?>
                                    <div class="project-detail-item">
                                        <div class="project-detail-content">
                                            <!-- <h3> -->
                                            <a href="<?php echo $product['url']; ?>">
                                                <?php echo htmlspecialchars($product['title']); ?>
                                            </a>
                                            <!-- </h3> -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- Product Detail Item End -->
                            </div>
                        </div>
                        <!-- Product detail Box End -->
                    </div>
                    <!-- Product Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Product Single End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <?php include 'scriptsImport.php'; ?>
</body>

</html>