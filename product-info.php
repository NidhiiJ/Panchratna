<div class="project-single-image">
    <figure class="image-anime reveal">
        <img src="<?php echo $current_product['image']; ?>" alt="<?php echo $current_product['name']; ?>">
    </figure>
</div>

<div class="project-info">
    <h2 class="text-anime-style-2">
        <?php echo $current_product['name']; ?> <span><?php echo $current_product['tagline']; ?></span>
    </h2>
    <?php foreach ($current_product['description'] as $i => $para): ?>
        <p class="wow fadeInUp" data-wow-delay="<?php echo 0.2 + ($i * 0.2); ?>s"><?php echo $para; ?></p>
    <?php endforeach; ?>
</div>
