<?php if($product->totalReviews() > 0): ?>
	<div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
		<div class="star-rating" title="Rated <?php echo $product->totalRatings() ?> out of 5">
			<span style="width:90%">
				<strong itemprop="ratingValue" class="rating"><?php echo $product->totalRatings() ?></strong> out of <span itemprop="bestRating">5</span>
				based on <span itemprop="ratingCount" class="rating"><?php echo $product->totalReviews() ?></span> customer ratings
			</span>
		</div>
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count"><?php echo $product->totalReviews() ?></span> customer reviews)</a>
	</div>
<?php endif; ?>



