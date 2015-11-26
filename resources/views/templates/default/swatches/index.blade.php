<?php $prefix = 'product'; ?>
@extends(cd_nar_template())
@section('body_class', 'single single-product postid-2138 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', 'Request Swatches')
@section('meta_keywords', 'Request Swatches')
@section('meta_description', 'Request Swatches')
@section('main_content_class', 'main-content-shop')
@section('head_bottom')
@append
@section('content')
<div id="content" class="main-content-inner" role="main">
	{!! view(cd_nar_view_name('swatches.partial.swatches')) !!}
</div>
@stop