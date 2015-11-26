<?php if(!is_empty($product)): ?>
	<?php
	/**
	 * Fix some xNAR strings
	 */
	$needles = ['../../../images/globalshopex.png', '<p>&nbsp;</p>','&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n'];
	$replace = [cd_nar_asset('images/globalshopex.png'), ''];
	?>
	<div role="tabpanel" class="panel entry-content wc-tab tab-pane active" id="tab-overview">
		<h2>Overview</h2>
		<?php echo str_replace($needles, $replace, html_entity_decode($product->overviewInfo())); ?>
	</div>
	<div role="tabpanel"  class="panel entry-content wc-tab tab-pane" id="tab-description">
		<h2>Description</h2>
		<?php echo str_replace($needles, $replace, html_entity_decode($product->productInfo())); ?>
	</div>

	<div role="tabpanel" class="panel entry-content wc-tab tab-pane" id="tab-shipping">
		<h2>Shipping Info</h2>
		<?php echo str_replace($needles, $replace, html_entity_decode($product->shippingInfo())); ?>
	</div>
<?php endif; ?>