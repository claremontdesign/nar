@extends(cd_nar_template())
@section('body_class', 'Contact Us')
@section('meta_title', 'Contact Us')
@section('meta_keywords', 'Contact Us')
@section('meta_description', 'Contact Us')
@section('head_bottom')
@append
@section('content')
<h1>Contact Us</h1>
<div class="col-md-6">
	<p>Top notch customer service is always a priority at Natural Home Rugs. Feel free to ask us any questions or tell us your concerns. </p>
	<p>We've put together a <a href="{{ cd_route('faq') }}">Frequently Asked Questions (FAQs)</a> page with answers to our most frequently asked questions.
		Please look over these questions and if you don’t see an answer to your question, please feel free to contact us or you can complete this direct online email from below</p>
	<p>Remember to click on the send button, once you’ve entered your question or comment. Someone from our customer service department will respond within 1 or 2 business days.</p>

	<h2>Email</h2>
	<p>
		General Information: <a href="mailto:info@naturalhomerugs.com">info@naturalhomerugs.com</a>
		<br />
		Customer Service: <a href="mailto:customerservice@naturalhomerugs.com">customerservice@naturalhomerugs.com</a>
		<br />
		Sales: <a href="mailto:sales@naturalhomerugs.com">sales@naturalhomerugs.com</a>
		<br />
		Website: <a href="mailto:webmaster@naturalhomerugs.com">webmaster@naturalhomerugs.com</a>
		<br />
	</p>
	<div class="col-md-6">
		<h2>Phone Number</h2>
		<p>
			Toll Free: 1.800.601.6062
			<br />International: 1.323.582.4999
			<br />Fax: 1.323.582.4900
		</p>
	</div>
	<div class="col-md-6">
		<h2>Address</h2>
		<p>
			Natural Home Rugs
			<br />324 S. Beverly Dr., Suite #282
			<br />Beverly Hills, CA 90212
		</p>
	</div>
</div>


<div class="col-md-6">
	{!! view(cd_nar_view_name('contact.partial.form')) !!}
</div>
@stop