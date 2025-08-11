<?php if (!empty($current_product['specifications'])): ?>
    <div class="specifications-container">
        <h3><?php echo $current_product['name']; ?> Specifications</h3>
        <div class="specifications-table">
            <?php foreach ($current_product['specifications'] as $index => $spec): ?>
                <div class="specifications-row <?php echo $index % 2 ? '' : 'alt'; ?>">
                    <div><?php echo $spec[0]; ?></div>
                    <?php if (!empty($spec[1])): ?>
                        <div>|</div>
                        <div><?php echo htmlspecialchars($spec[1]); ?></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>