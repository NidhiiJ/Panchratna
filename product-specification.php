<?php
if (!isset($product_detail['specifications'])) return;
?>
<div class="specifications-container">
    <h3>Specifications</h3>
    <div class="specifications-table">
        <?php foreach ($product_detail['specifications'] as $index => $spec): ?>
            <div class="specifications-row <?php echo $index % 2 ? '' : 'alt'; ?>">
                <div><?php echo $spec[0]; ?></div>
                <div>|</div>
                <div><?php echo $spec[1]; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
