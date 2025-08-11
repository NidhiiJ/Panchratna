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
    <div class="page-header page-header-products parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Products</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">products</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Work Section Start -->
    <div class="page-projects">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Product Item Boxes start -->
                    <div class="row gap-4 project-item-boxes align-items-center">
                        <?php
                        $counter = 0;
                        foreach ($products as $keyName => $product):
                            ?>
                            <div class="col-md-4 col-lg-3 project-item-box <?php echo $product['categories']; ?>">
                                <!-- Product Item Start -->
                                <div class="project-item mb-0 wow fadeInUp"
                                    data-wow-delay="<?php echo 0.02 + ($counter * 0.01); ?>s">
                                    <a href="/product-single.php?key=<?php echo $keyName; ?>">
                                        <div class="project-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo $product['image']; ?>"
                                                    alt="<?php echo htmlspecialchars($product['name']); ?>">
                                            </figure>
                                        </div>
                                        <div class="project-tag product-tag">
                                            <p><?php echo htmlspecialchars($product['tag']); ?></p>
                                        </div>
                                        <div class="project-content d-none">
                                            <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                                        </div>
                                    </a>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <?php
                            $counter++;
                        endforeach;
                        ?>
                    </div>
                    <!-- Product Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Work Section End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <?php include 'scriptsImport.php'; ?>
</body>

</html>