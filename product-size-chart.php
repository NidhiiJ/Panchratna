<?php
// Check if size_charts exists and is not empty
if (!isset($product_detail['size_charts']) || empty($product_detail['size_charts'])) return;

echo '<div class="size-chart-container">';
echo '<h3>' . htmlspecialchars($product_detail['name']) . ' Size Chart</h3>';

// Handle multiple size charts
foreach ($product_detail['size_charts'] as $chart) {
    // Validate chart structure
    if (!isset($chart['headers']) || !isset($chart['values']) || 
        !is_array($chart['headers']) || !is_array($chart['values'])) {
        continue;
    }

    // Display chart name only if it exists and is not empty
    if (isset($chart['name']) && !empty(trim($chart['name']))) {
        echo '<span class="nested-table-header">' . htmlspecialchars($chart['name']) . '</span>';
    }

    echo '<div class="size-chart-table">';

    // Print headers dynamically
    echo '<div class="size-chart-row size-chart-header">';
    foreach ($chart['headers'] as $header) {
        echo '<div>' . htmlspecialchars($header) . '</div>';
    }
    echo '</div>';

    // Print values
    foreach ($chart['values'] as $row) {
        echo '<div class="size-chart-row">';
        if (is_array($row)) {
            foreach ($row as $cell) {
                echo '<div>' . htmlspecialchars($cell) . '</div>';
            }
        }
        echo '</div>';
    }

    echo '</div>';
}

echo '</div>';
?>