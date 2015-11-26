<?php
$prefix = !empty($prefix) ? $prefix : null;
?>
<form class="cart <?php echo $prefix?>item_cartform" id="<?php echo $prefix?>item-cartform-<?php echo $product->id() ?>" method="post" action="<?php echo cd_config('nar.yahoo.form.addtocart') ?>">
	<input type="hidden" value="<?php echo cd_config('nar_yahoo_form_vwcatalog') ?>" name="vwcatalog" />
	<div class="quantity">
		<input type="number" step="1" min="1" name="vwquantity1" value="1" title="Qty" class="input-text qty text" size="4" />
	</div>
	<input type="hidden" name="vwitem1" id="product-item-sku" value="" />
	<button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
    <input type="hidden" value="<?php echo $product->url()?>" name=".autodone">
</form>