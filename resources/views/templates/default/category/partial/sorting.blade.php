<?php
	$sort = \Request::get('sort');
?>
<form class="woocommerce-ordering" method="get">
	<select name="sort" class="orderby">
		<option value="">Choose Sort Order</option>
		<option <?php echo !empty($sort) && $sort == 'price-low-high' ? 'selected="selected"' : ''; ?> value="price-low-high">Price Low - High</option>
		<option <?php echo !empty($sort) && $sort == 'price-high-low' ? 'selected="selected"' : ''; ?> value="price-high-low">Price High - Low</option>
		<option <?php echo !empty($sort) && $sort == 'rating-high-low' ? 'selected="selected"' : ''; ?> value="rating-high-low">Customer Ratings</option>
		<option <?php echo !empty($sort) && $sort == 'sale-high-low' ? 'selected="selected"' : ''; ?> value="sale-high-low">%Off</option>
	</select>
</form>