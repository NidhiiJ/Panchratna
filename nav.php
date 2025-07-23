<?php
/**
 * Navigation Component
 * Usage: include 'components/nav.php';
 * 
 * You can pass $current_page variable to highlight active menu item
 * Example: $current_page = 'about'; include 'components/nav.php';
 */

// Set default current page if not defined
if (!isset($current_page)) {
    $current_page = '';
}

// Menu items array for easy management
$menu_items = [
    'about' => ['url' => 'about.html', 'text' => 'About Us'],
    'products' => ['url' => 'services.html', 'text' => 'Products'],
    'industries' => ['url' => 'projects.html', 'text' => 'Industries We Serve'],
    'infrastructure' => ['url' => 'blog.html', 'text' => 'Infrastructure'],
    'contact' => ['url' => 'contact.html', 'text' => 'Contact Us']
];
?>

<!-- Header Start -->
<header class="main-header">
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
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($current_page === $key) ? 'active' : ''; ?>" 
                                       href="<?php echo $item['url']; ?>">
                                        <?php echo $item['text']; ?>
                                    </a>
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
<!-- Header End -->