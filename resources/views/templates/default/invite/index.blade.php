@extends(cd_nar_template())
@section('body_class', 'invite')
@section('meta_title', 'Invite your friend')
@section('meta_keywords', 'Invite your friend')
@section('meta_description', 'Invite your friend')
@section('content')
<h1>Invite your friend</h1>
<div class="col-md-6">
	{!! view(cd_narbase_view_name('invite.partial.form')) !!}
</div>
<div class="col-md-6">&nbsp;
</div>
@stop