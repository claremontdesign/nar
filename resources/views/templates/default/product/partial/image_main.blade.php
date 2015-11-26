<?php
$src = false;
if(!is_empty($product))
{
	$image = $product->mainImage();
	$colorBinding = [];
	if(!is_empty($image) && $image->check())
	{
		$src = $product->url() . $image->publicSrc(464, 580);
	}
}
?>
<a href="<?php echo $src ?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
	<img width="464" height="580" src="<?php echo $src ?>" class="attachment-shop_single wp-post-image" alt="<?php echo $product->title()?>" title="<?php echo $product->title()?>">
</a>