<?php
$prefix = !empty($prefix) ? $prefix : null;
if(!is_empty($product))
{
	if(!$product->isOutOfStock())
	{
		if($product->isPriceRange())
		{
			$price = cd_config('ecommerce.currency.symbol') . ' ' . $product->minimumPrice(true) . ' - ' . cd_config('ecommerce.currency.symbol') . ' ' . $product->maximumPrice(true);
		}
		else
		{
			$price = cd_config('ecommerce.currency.symbol') . ' ' . $product->price(true);
		}
	}
	else
	{
		echo '<span class="outOfStock">Out of Stock</span>';
	}
}
?>
<?php if(!empty($price)): ?>
	<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
		<p class="price">
			<span data-originalvalue="<?php echo $price ?>" class="amount <?php echo $prefix?>price-amount" id="<?php echo $prefix?>price-amount-<?php echo $product->id(); ?>"><?php echo $price ?></span>
		</p>
		<meta itemprop="price" content="<?php echo $price ?>">
		<meta itemprop="priceCurrency" content="USD">
		<link itemprop="availability" href="http://schema.org/InStock">
	</div>
<?php endif; ?>