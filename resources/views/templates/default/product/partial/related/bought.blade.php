<?php
if(!is_empty($product))
{
	$products = $product->relatedBought();
}
?>
<?php if(!is_empty(count($products))): ?>
	<h2>Customer Also Likes</h2>
	{!! view(cd_nar_view_name('category.partial.list'), compact('products')) !!}
<?php endif; ?>
