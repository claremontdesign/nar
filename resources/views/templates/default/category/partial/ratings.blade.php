<?php if($product->totalRatings() > 0): ?>
	<div class="star-rating" title="Rated <?php echo $product->totalRatings() ?> out of <?php echo $product->totalReviews() ?>">
		<span style="width:90%">
			<strong class="rating"><?php echo $product->totalRatings() ?></strong>
			out of <?php echo $product->totalReviews() ?>
		</span>
	</div>
<?php endif; ?>