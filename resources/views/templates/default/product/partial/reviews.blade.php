<?php
$prefix = !empty($prefix) ? $prefix : null;
?>
<div class="panel entry-content wc-tab tab-pane" id="tab-reviews">
	<div id="reviews">
		<div id="comments">
			{!! view(cd_nar_view_name('productreview.partial.list'), compact('product','prefix')) !!}
		</div>
		<div id="review_form_wrapper">
			<div id="review_form">
				<div id="respond" class="comment-respond">
					<h3 id="reply-title" class="comment-reply-title">Add a review
						<small>
							<a rel="nofollow" id="cancel-comment-reply-link" href="<?php echo $product->url('review') ?>" style="display:none;">Cancel reply</a>
						</small>
					</h3>
					{!! view(cd_nar_view_name('productreview.partial.form'), compact('product','prefix')) !!}
				</div><!-- #respond -->
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>