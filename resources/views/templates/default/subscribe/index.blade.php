@extends(cd_nar_template())
@section('body_class', '')
@section('meta_title', 'Subscribe')
@section('meta_keywords', 'Subscribe')
@section('meta_description', 'Subscribe')
@section('content')
<h1>NHR Subscribe</h1>

{!! view(cd_narbase_view_name('subscribe.partial.form'), compact('subscribe')) !!}

@stop