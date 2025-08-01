<?php
if (!isset($current_page)) {
    $current_page = '';
}

// Menu items array for easy management
$menu_items = [
    'home' => ['url' => './', 'text' => 'Home'],
    'about' => ['url' => 'about.php', 'text' => 'About Us'],

    'products' => [
        'url' => 'products.php',
        'text' => 'Products',
        'submenu' => [
            ['url' => 'flat-bars.html', 'text' => 'Flat Bars'],
            ['url' => 'angles.html', 'text' => 'Angles'],
            ['url' => 'channels.html', 'text' => 'Channels'],
            ['url' => 'pipes.html', 'text' => 'Pipes & Tubes'],
            ['url' => 'sheets-coils.html', 'text' => 'Sheets & Coils'],
            ['url' => 'flat-bars.html', 'text' => 'Flat Bars'],
            ['url' => 'angles.html', 'text' => 'Angles'],
            ['url' => 'channels.html', 'text' => 'Channels'],
            ['url' => 'pipes.html', 'text' => 'Pipes & Tubes'],
            ['url' => 'sheets-coils.html', 'text' => 'Sheets & Coils'],
            ['url' => 'flat-bars.html', 'text' => 'Flat Bars'],
            ['url' => 'angles.html', 'text' => 'Angles'],
            ['url' => 'channels.html', 'text' => 'Channels'],
            ['url' => 'pipes.html', 'text' => 'Pipes & Tubes'],
            ['url' => 'sheets-coils.html', 'text' => 'Sheets & Coils']
        ]
    ],

    'industries' => ['url' => 'industries-we-serve.php', 'text' => 'Industries We Serve'],
    'infrastructure' => ['url' => 'infrastructure.php', 'text' => 'Infrastructure'],
    'contact' => ['url' => 'contact.php', 'text' => 'Contact Us']
];

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

                                    <?php if (isset($item['submenu'])): ?>
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