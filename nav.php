<?php
if (!isset($current_page)) {
    $current_page = '';
}

// Import product data
include 'products-data.php';

// Menu items array
$menu_items = [
    'home' => ['url' => './', 'text' => 'Home'],
    'about' => ['url' => 'about.php', 'text' => 'About Us'],

    'products' => [
        'url' => 'products.php',
        'text' => 'Products',
        'submenu' => [] // will populate from products array
    ],

    'industries' => ['url' => 'industries-we-serve.php', 'text' => 'Industries We Serve'],
    'infrastructure' => ['url' => 'infrastructure.php', 'text' => 'Infrastructure'],
    'contact' => ['url' => 'contact.php', 'text' => 'Contact Us']
];

// Add "All Products" as the first submenu item
$menu_items['products']['submenu'][] = [
    'url' => 'products.php',
    'text' => 'All Products'
];

// Dynamically generate submenu items from $products
foreach ($products as $keyName => $product) {
    // Create SEO-friendly URL using keyName
    $menu_items['products']['submenu'][] = [
        'url' => "product-single.php?key=" . urlencode($keyName),
        'text' => $product['name']
    ];
}
?>

<!-- Header Start -->
<header class="main-header active-sticky-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="images/panchratnaContent/logo.svg" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav ms-auto" id="menu">
                            <?php foreach ($menu_items as $key => $item): ?>
                                <li class="nav-item <?php echo isset($item['submenu']) ? 'submenu' : ''; ?>">
                                    <a class="nav-link <?php echo ($current_page === $key) ? 'active' : ''; ?>"
                                        href="<?php echo $item['url']; ?>">
                                        <?php echo $item['text']; ?>
                                    </a>

                                    <?php if (isset($item['submenu']) && !empty($item['submenu'])): ?>
                                        <ul>
                                            <?php foreach ($item['submenu'] as $sub): ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $sub['url']; ?>">
                                                        <?php echo $sub['text']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
            <div class="responsive-menu"></div>
        </nav>
    </div>
</header>
