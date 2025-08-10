<!DOCTYPE html>
<html lang="zxx">
<head>
    <?php $page_title = "About - Panchratna Overseas";
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

    <!-- error section start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-page-image wow fadeInUp">
                        <img src="images/404-error-img.png" alt="">
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">Oops! page <span>not found</span></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">The page you are looking for does not exist</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.75s" href="./"><span>back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error section end -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <?php include 'scriptsImport.php' ; ?>
</body>
</html>