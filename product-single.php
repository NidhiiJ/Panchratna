<?php
include 'products-data.php';

$key = $_GET['key'] ?? '';
if (!isset($product_details[$key])) {
    header("HTTP/1.0 404 Not Found");
    include '404.php';
    exit;
}

$product_detail = $product_details[$key];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $page_title = $product_detail['name'] . " - Panchratna Overseas";
    $page_description = "Learn about " . $product_detail['name'] . " from Panchratna Overseas";
    include 'headConfig.php';
    ?>
</head>

<body>

    <?php include 'preloader.php'; ?>
    <?php include 'nav.php'; ?>

    <!-- Page Header Start -->
    <div class="page-header-no-bg parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box page-header-no-bg-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <?php echo htmlspecialchars($product_detail['name']); ?>
                        </h1>
                        <?php if (!empty($product_detail['one_line_size'])): ?>
                            <p class="one-liner-size"><span>Size - </span><?php echo $product_detail['one_line_size']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
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
                    <?php if ($product_detail['type'] === 'structure-1'): ?>
                        <div id="structure-1" class="project-single-content">
                            <div class="project-entry">
                                <?php
                                $current_product = $product_detail;

                                include 'product-info.php';
                                include 'product-specification.php';
                                include 'product-size-chart.php';
                                ?>
                            </div>
                        </div>
                    <?php elseif ($product_detail['type'] === 'structure-2'): ?>
                        <div id="structure-2" class="project-single-content">
                            <div class="project-entry">
                                <?php
                                foreach ($product_detail['products'] as $sub_product) {
                                    $current_product = $sub_product;
                                    ?>
                                    <div class="sub-product-wrapper">
                                        <?php
                                        include 'product-info.php';
                                        include 'product-specification.php';
                                        // skipping size chart here to render common one later
                                        ?>
                                    </div>
                                    <?php
                                }

                                if (!empty($product_detail['size_charts'])) {
                                    $current_product = $product_detail;
                                    include 'product-size-chart.php';
                                }
                                ?>
                            </div>

                        </div>
                    <?php endif; ?>
                </div>


                <div class="col-lg-4">
                    <div class="project-sidebar">
                        <div class="project-detail-box">
                            <div class="project-detail-title">
                                <h3>Other Products</h3>
                            </div>
                            <div class="project-detail-list">
                                <?php foreach ($products as $keyName => $prod): ?>
                                    <?php if ($keyName !== $key): // Skip current product ?>
                                        <div class="project-detail-item">
                                            <div class="project-detail-content">
                                                <a href="/product-single.php?key=<?php echo $keyName; ?>">
                                                    <?php echo htmlspecialchars($prod['name']); ?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Product Single End -->

    <?php include 'footer.php'; ?>
    <?php include 'scriptsImport.php'; ?>
</body>

</html>