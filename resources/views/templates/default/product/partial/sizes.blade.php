<?php
$prefix = !empty($prefix) ? $prefix : null;
if(!is_empty($product))
{
	$sizes = $product->viewableSizes();
}
?>
<?php if(!is_empty($sizes) && !is_empty($product)): ?>
	@section('head_bottom')
	<style type="text/css">
		.product-sizes{
			margin-bottom: 20px;
		}
		.product-sizes a{
			float: left;
			display: block;
			padding: 5px 10px;
			border: 2px solid gray;
			cursor: pointer;
			text-align: center;
			margin-right: 5px;
			color: black !important;
		}

		.product-sizes a:hover{
			border: 2px solid #ecad25;
		}
		.product-sizes a.selected{
			border: 2px solid #ecad25;
			background-color: #ecad25;
		}
	</style>
	@append
	@section('body_bottom')
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.product-sizes-entry').click(function(e) {
				e.preventDefault();
				var cartForm = jQuery('#<?php echo $prefix ?>item-cartform-<?php echo $product->id() ?>');
				if (jQuery(this).hasClass('selected'))
				{
					jQuery(this).removeClass('selected');
					cd_revertTextToOriginal('#<?php echo $prefix ?>price-amount-<?php echo $product->id() ?>');
					return;
				}
				cartForm.find('input[name="vwitem1"]').remove();
				if (cartForm.find('input[name="vwitem1"]').length === 0)
				{
					cartForm.append('<input type="hidden" name="vwitem1" value="' + jQuery(this).attr('data-sku') + '" />');
				}
				jQuery('.product-sizes-entry').removeClass('selected');
				jQuery(this).addClass('selected');
				var price = jQuery(this).attr('data-currencySymbol') + ' ' + jQuery(this).attr('data-price');
				jQuery('#<?php echo $prefix ?>price-amount-<?php echo $product->id() ?>').text(price);
			});
		});
	</script>
	@append
	<p>Please select a size:</p>
	<div class="product-option product-sizes columns-6 clearfix">
		<?php foreach ($sizes as $size): ?>
			<?php if($size->isSale()): ?>
				<a href="#" data-currencySymbol="$" class="product-sizes-entry" data-sku="<?php echo $size->sku() ?>" data-price="<?php echo $size->price(true) ?>">
					<?php echo $size->name() ?>
				</a>
			<?php else: ?>
				<a href="#" data-currencysymbol="$" class="product-sizes-entry" data-sku="<?php echo $size->sku() ?>" data-price="<?php echo $size->salePrice(true) ?>">
					<?php echo $size->name() ?>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
<?php endif; ?>