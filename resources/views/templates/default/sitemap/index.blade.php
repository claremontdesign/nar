@extends(cd_nar_template())
@section('body_class', 'category-index archive tax-product_cat term-jute term-136 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', 'Sitemap')
@section('meta_keywords', 'Sitemap')
@section('meta_description', 'Sitemap')
@section('main_content_class', 'main-content-shop')
@section('content')
<div id="content" class="main-content-inner" role="main">
	<h1 class="page-title">Sitemap</h1>
	{!! view(cd_narbase_view_name('sitemap.partial.categories'), compact('categories')) !!}
</div>
@stop