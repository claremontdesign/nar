<?php
$paginator = $products;
?>
@extends(cd_nar_template())
@section('body_class', 'category-index archive tax-product_cat term-jute term-136 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', $category->title())
@section('meta_keywords', $category->metaKeywords())
@section('meta_description', $category->metaDescription())
@section('main_content_class', 'main-content-shop')
@section('content')
<div id="content" class="main-content-inner" role="main">
	<h1 class="page-title"><?php echo $category->title() ?></h1>
	{!! view(cd_nar_view_name('category.partial.counter'), compact('paginator','category','products')) !!}
	{!! view(cd_nar_view_name('category.partial.sorting'), compact('category','products')) !!}
	{!! view(cd_nar_view_name('category.partial.list'), compact('category','products')) !!}
	{!! view(cd_cdbase_view_name('paginator.pagination'), compact('paginator')) !!}
</div>
@stop