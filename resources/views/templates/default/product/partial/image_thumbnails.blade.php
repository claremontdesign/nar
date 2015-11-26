<?php
$images = false;
if(!is_empty($product))
{
	$images = $product->viewableImages();
	$colorBinding = [];
	if(!is_empty($images))
	{
		foreach ($images as $image)
		{
			if($image->check())
			{
				$colorBinding[$image->color()][] = $image;
			}
		}
	}
}
?>
@section('head_bottom')
<style type="text/css">
	#product-thumbnails{
		width: 95% !important;
		margin:0px auto !important;
	}
	#product-thumbnails .item{
		margin: 3px;
		display: block;
		padding: 0px 0px;
		margin: 5px;
		color: #FFF;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		text-align: center;
	}
	#product-thumbnails .item img{
		display: block;
		width: 100%;
		height: auto;
	}
	.product-thumbails-navigation{
		position: relative;
		height: 0px;
		margin-top:5px;
	}
	.product-thumbails-navigation a{
		position: absolute;
		width: 16px !important;
		border: 0px !important;
		background: rgba(0,0,0,0.2);
		z-index: 99;
		text-indent: -99999px;
		height: 136px !important;
		margin-top: 5px;
		padding: 0px;
	}
	.product-thumbails-navigation a:hover{
		background: rgba(0,0,0,0.3);
	}
	.product-thumbails-navigation a.next{
		left: 485px;
	}
	.product-thumbails-navigation a.prev{}
</style>
@append
@section('body_bottom')
<script type="text/javascript">
	jQuery(document).ready(function() {
		var owl = jQuery("#product-thumbnails");
		owl.owlCarousel({
			items: 4,
			nav: false
		});
		jQuery('.product-thumbails-navigation .next').click(function() {
			owl.trigger('next.owl.carousel');
		});
		jQuery('.product-thumbails-navigation .prev').click(function() {
			owl.trigger('prev.owl.carousel');
		});
	});
</script>
@append
<?php if(!is_empty($images)): ?>
	<div class="product-thumbails-navigation">
		<a class="btn prev fa fa-caret-left" title="Scroll left">Previous</a>
		<a class="btn next fa fa-caret-right" title="Scroll right">Next</a>
	</div>
	<div id="product-thumbnails">
		<?php foreach ($images as $image): ?>
			<?php if($image->check()): ?>
				<?php
				$src = $product->url() . $image->publicSrc(180, 180);
				?>
				<a href="<?php echo $product->url() . $image->publicSrc(550) ?>" class="item zoom" title="<?php echo $product->title() ?>" data-rel="prettyPhoto[product-gallery]">
					<img src="<?php echo $src ?>" class="attachment-shop_thumbnail" alt="<?php echo $product->title() ?>" title="<?php echo $product->title() ?>">
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
<?php endif; ?>