<form method="post" action="{{ route('invite') }}" role="form" id="inviteForm">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="email">Your friend's Email:</label>
		<input type="email" name="email" required placeholder="Friend's Email Address" class="form-control" value="{{ old('email') }}" />
	</div>
	<div class="form-group" style="display: none">
		<label for="name">Your friends's Name:</label>
		<input type="text" name="name" required placeholder="Friend's Name" class="form-control"  value="{{ old('name') }}"/>
	</div>
	<div class="form-group" style="display: none">
		<label for="subject">Message Subject:</label>
		<input type="text" name="subject" required placeholder="Message Subject" class="form-control"  value="I saw beautiful rugs on NaturalAreaRugs."/>
	</div>
	<div class="form-group" style="display: none">
		<label for="comment">Message text:</label>
		<textarea name="comment" id="comment" placeholder="Message" title="Your Message" class="form-control" rows="10">Hi, I though it might interest's you.
		</textarea>
	</div>

	<div class="form-group" style="display: none">
		<label for="email">Your Email:</label>
		<input type="email" name="youremail" required placeholder="Your Email Address" class="form-control" value="{{ old('youremail') }}" />
	</div>
	<div class="form-group" style="display: none">
		<label for="name">Your Name:</label>
		<input type="text" name="yourname" required placeholder="Your Name" class="form-control"  value="{{ old('yourname') }}"/>
	</div>

	<div class="form-group form-action">
		<input type="hidden" name="submit" value="1" />
		<input type="submit" value="Submit" class="btn btn-success" />
	</div>
</form>