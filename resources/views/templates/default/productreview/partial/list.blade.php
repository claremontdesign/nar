<?php
$prefix = !empty($prefix) ? $prefix : null;
if(!is_empty($product))
{
	$reviews = $product->viewableReviews();
}
?>
<?php if(!is_empty($reviews)): ?>
	<h2><?php echo $product->totalReviews() ?> reviews for <?php echo $product->title() ?></h2>
	<ol class="commentlist">
		<?php foreach ($reviews as $review): ?>
			<li itemprop="review" itemscope="" itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-<?php echo $review->id() ?>">
				<div id="comment-<?php echo $review->id() ?>" class="comment_container">
					<img alt="" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
					<div class="comment-text">
						<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
							<span style="width:80%"><strong itemprop="ratingValue"><?php echo $review->rating(); ?></strong> out of 5</span>
						</div>
						<p class="meta">
							<strong itemprop="author"><?php echo $review->userName() ?></strong> – <time itemprop="datePublished" datetime="<?php echo $review->dateReviewed()->format('ISO'); ?>"><?php echo $review->dateTimeDisplayDateReviewed(); ?></time>:
						</p>
						<div itemprop="description" class="description">
							<p>
								<?php echo $review->review(); ?>
							</p>
						</div>
					</div>
				</div>
			</li><!-- #comment-## -->
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

