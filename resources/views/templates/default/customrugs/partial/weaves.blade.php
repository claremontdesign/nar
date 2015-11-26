<?php if(!empty($products)): ?>
	<ul class="products">
		<?php $i = 0; ?>
		<?php foreach ($products as $product): ?>
			<li class="product type-product has-post-thumbnail">
				<div class="product-inner">
					<figure class="product-image-box">
						<a href="<?php echo $product->customRug()->url() ?>" title="<?php echo $product->customRug()->title() ?>">
							<img data-imagemo="<?php echo $product->url() . $product->categoryImage(null, true)->publicSrc(300, 300) ?>" src="<?php echo $product->url() . $product->categoryImage()->publicSrc(300, 300) ?>" alt="<?php echo $product->customRug()->title() ?>">
						</a>
					</figure>
					<a href="<?php echo $product->customRug()->url() ?>" title="<?php echo $product->customRug()->title() ?>">
						<h3><?php echo $product->customRug()->title() ?></h3>
					</a>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>