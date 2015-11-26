@extends(cd_nar_template())
@section('body_class', 'category-index archive tax-product_cat term-jute term-136 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', 'Custom Rugs')
@section('meta_keywords', '')
@section('meta_description', '')
@section('body_bottom')
@append
@section('content')
<div id="content" class="main-content-inner" role="main">
	<h1 class="page-title">Create a Custom Rug</h1>
	{!! view(cd_nar_view_name('customrugs.partial.weaves'), compact('products')) !!}
</div>
@stop