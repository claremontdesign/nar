@section('head_bottom')
<style type="text/css">

	/* Larger than mobile */
	@media (min-width: 380px) {
		.stars{
			top: -10px;left: 0px;

		}
		.stars .star-rater{
			margin-right: 0.5em !important;
		}
	}

	/* Larger than phablet */
	@media (min-width: 550px) {}

	/* Larger than tablet */
	@media (min-width: 750px) {}

	/* Larger than desktop */
	@media (min-width: 1000px) {
		.stars{
			top: -50px;left: 255px;
			height: 0px;
		}
		.stars .star-rater{
			margin-right: 1em !important;
		}
	}

	/* Larger than Desktop HD */
	@media (min-width: 1200px) {
	}
</style>
@append
@section('body_bottom')
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.star-rater').click(function(e) {
			jQuery('.star-rater').removeClass('active');
			e.preventDefault();
			jQuery('#star-rating<?php echo $product->id() ?>').val(jQuery(this).attr('data-value'));
			jQuery(this).addClass('active');
		});
	});
</script>
@append
<form action="<?php echo $product->url('review') ?>" method="post" id="commentform" class="comment-form">
	{{ csrf_field() }}

	<p class="comment-form-author">
		<label for="author">Name <span class="required">*</span></label>
		<input id="author" name="name" required placeholder="Your name/nickname" type="text" value="{{ old('name') }}" size="30" aria-required="true">
	</p>
	<p class="comment-form-email">
		<label for="email">Email <span class="required">*</span></label>
		<input id="email" name="email" required placeholder="Email address" type="email" value="{{ old('email') }}" size="30" aria-required="true">
	</p>
	<p class="comment-form-rating">
		<label for="rating">Your Rating</label>
	</p>
	<p class="stars">
		<span>
			<a class="star-rater star-1 <?php echo old('rating') == '1' ? 'active' : null?>" data-value="1" href="#">1</a>
			<a class="star-rater star-2 <?php echo old('rating') == '2' ? 'active' : null?>" data-value="2" href="#">2</a>
			<a class="star-rater star-3 <?php echo old('rating') == '3' ? 'active' : null?>" data-value="3" href="#">3</a>
			<a class="star-rater star-4 <?php echo old('rating') == '4' ? 'active' : null?>" data-value="4" href="#">4</a>
			<a class="star-rater star-5 <?php echo old('rating') == '5' ? 'active' : null?>" data-value="5" href="#">5</a>
		</span>
		<input type="hidden" name="rating" id="star-rating<?php echo $product->id() ?>" value="{{ old('rating') }}"/>
	</p>
	<p class="comment-form-title">
		<label for="title">Title <span class="required">*</span></label>
		<input id="title" name="title" required placeholder="Review title" type="text" value="{{ old('title') }}" size="30" aria-required="true" >
	</p>
	<p class="comment-form-comment">
		<label for="comment">Your Review</label>
		<textarea id="comment" required placeholder="Your review" name="review" cols="45" rows="8" aria-required="true">
			{{ old('review') }}
		</textarea>
	</p>
	<p class="form-submit">
		<input name="submit" type="submit" id="submit" class="submit" value="Submit">
	</p>
</form>