<?php
$maxCount = $paginator->perPage() * $paginator->currentPage();
$minCount = ($maxCount - $paginator->perPage()) + 1;
if($maxCount > $paginator->total())
{
	$maxCount = $paginator->total();
}
?>
<?php if($paginator->currentPage() < $paginator->lastPage()): ?>
	<p class="woocommerce-result-count">
		Showing <?php echo $minCount ?> - <?php echo $maxCount ?> of <?php echo $paginator->total() ?> Products</p>
<?php else: ?>
	<p class="woocommerce-result-count">Showing <?php echo $minCount ?> - <?php echo $maxCount ?> of <?php echo $paginator->total() ?> Products</p>
<?php endif; ?>