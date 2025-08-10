<?php
if (!isset($product_detail['size_chart'])) return;
?>
<div class="size-chart-container">
    <h3><?php echo $product_detail['name']; ?> Size Chart</h3>
    <div class="size-chart-table">
        <div class="size-chart-row size-chart-header">
            <div>Width (mm)</div>
            <div>Thickness (mm)</div>
        </div>
        <?php foreach ($product_detail['size_chart'] as $row): ?>
            <div class="size-chart-row">
                <div><?php echo $row[0]; ?></div>
                <div><?php echo $row[1]; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
