<?php
if (!isset($product_detail)) return;
?>
<div class="project-single-image">
    <figure class="image-anime reveal">
        <img src="<?php echo $product_detail['image']; ?>" alt="<?php echo $product_detail['name']; ?>">
    </figure>
</div>

<div class="project-info">
    <h2 class="text-anime-style-2">
        <?php echo $product_detail['name']; ?> <span><?php echo $product_detail['tagline']; ?></span>
    </h2>
    <?php foreach ($product_detail['description'] as $i => $para): ?>
        <p class="wow fadeInUp" data-wow-delay="<?php echo 0.2 + ($i * 0.2); ?>s"><?php echo $para; ?></p>
    <?php endforeach; ?>
</div>
