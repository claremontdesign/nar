<span class="price">
	<span class="amount">
		<?php
		if(!is_empty($product))
		{
			if(!$product->isOutOfStock())
			{
				if($product->isPriceRange())
				{
					echo cd_config('ecommerce.currency.symbol') . ' ' . $product->minimumPrice(true) . ' - ' . cd_config('ecommerce.currency.symbol') . ' ' . $product->maximumPrice(true);
				}
				else
				{
					echo cd_config('ecommerce.currency.symbol') . ' ' . $product->price(true);
				}
			}
			else
			{
				echo '<span class="outOfStock">Out of Stock</span>';
			}
		}
		?>
	</span>
</span>