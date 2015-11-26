<?php
$swatches = cd_config('nar.swatches');
$prefix = 'swatches-';
?>
@section('body_bottom')
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.<?php echo $prefix ?>-addtocart').click(function(e) {
			e.preventDefault();
			if (jQuery(this).hasClass('<?php echo $prefix ?>-category-binding'))
			{
				jQuery('#<?php echo $prefix ?>-binding').val(jQuery(this).attr('data-sku'));
			} else {
				jQuery('#<?php echo $prefix ?>-weave').val(jQuery(this).attr('data-sku'));
			}
			jQuery('#<?php echo $prefix ?>-form').submit();
		});
		jQuery('.swatch-image').click(function(e) {
			jQuery('#swatches-preview-name').text(jQuery(this).attr('data-name'));
			jQuery('#swatches-preview img').attr('src',jQuery(this).attr('data-imgsrc'));
		});
	});
</script>
@append
@section('head_bottom')
<style type="text/css">
	.swatches{}
	.swatches-category{}
	.swatches-items{}
	.swatches-item {
		height: 190px;
		margin-bottom: 40px;
	}
	.swatches-item .swatch-image{
		cursor: pointer;
	}
	.swatches-item .swatch-image img{}
	.swatches-item h3 {
		font-size: 16px;
		padding:0px;margin:0px;
	}
	.<?php echo $prefix ?>addtocart{
		font-size: 10px !important;
		padding: 8px !important;
		line-height: 13px !important;
		height: 30px !important;
	}
</style>
@append
<form role="form" method="post" action="<?php echo cd_config('nar.yahoo.form.addtocart') ?>" id="<?php echo $prefix ?>-form">
	<input type="hidden" value="<?php echo cd_config('nar_yahoo_form_vwcatalog') ?>" name="vwcatalog" />
	<input type="hidden" value="" name="vwitem" id="<?php echo $prefix ?>-weave" />
	<input type="hidden" value="" name="vwitem2" id="<?php echo $prefix ?>-binding"/>
	<div class="col-md-4">
		<div id="swatches-preview-wrapper">
			<div id="swatches-preview">
				<img src="<?php echo cd_nar_asset('swatches/amalfi.jpg') ?>" alt=""/>
			</div>
			<h2 id="swatches-preview-name"><?php echo $swatches['items']['amalfi']['name']; ?></h2>

		</div>
	</div>
	<div class="col-md-8">
		<div class="swatches">
			<?php if(!empty($swatches['categories'])): ?>
				<?php foreach ($swatches['categories'] as $categoryIndex => $categoryOption): ?>
					<div class="swatches-category row">
						<?php if(!empty($categoryOption['enable']) && !empty($categoryOption['items'])): ?>
							<h2><?php echo $categoryOption['name'] ?></h2>
							<div class="swatches-items">
								<?php foreach ($categoryOption['items'] as $itemIndex): ?>
									<?php if(!empty($swatches['items'][$itemIndex]['enable'])): ?>
										<div class="swatches-item col-md-3">
											<div class="swatch-image" data-imgsrc="<?php echo cd_nar_asset('swatches/' . $itemIndex . '.jpg') ?>" data-name="<?php echo $swatches['items'][$itemIndex]['name'] ?>">
												<img src="<?php echo cd_nar_asset('swatches/' . $itemIndex . '.jpg') ?>" alt="<?php echo $swatches['items'][$itemIndex]['name'] ?>" />
											</div>
											<h3><?php echo $swatches['items'][$itemIndex]['name'] ?></h3>
											<div class="swatches-price">$ <?php echo number_format($swatches['items'][$itemIndex]['price'], 2); ?></div>
											<a href="#" class="single_add_to_cart_button button alt <?php echo $prefix ?>addtocart <?php echo $prefix ?>category-<?php echo $categoryIndex ?>" data-sku="<?php echo $swatches['items'][$itemIndex]['sku']; ?>">Add to Cart</a>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</form>