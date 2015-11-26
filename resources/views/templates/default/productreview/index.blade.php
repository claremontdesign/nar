<?php $prefix = 'product'; ?>
@extends(cd_nar_template())
@section('body_class', 'single single-product postid-2138 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', $product->metaTitle())
@section('meta_keywords', $product->metaKeywords())
@section('meta_description', $product->metaDescription())
@section('main_content_class', 'main-content-shop')
@section('head_bottom')
@append
@section('content')
<div id="content" class="main-content-inner" role="main">
	<div itemscope="" itemtype="http://schema.org/Product" id="product-<?php echo $product->id() ?>" class="post-<?php echo $product->id() ?> product type-product status-publish has-post-thumbnail ">
		<div class="images">
			{!! view(cd_nar_view_name('product.partial.image_main'), compact('product','prefix')) !!}
			{!! view(cd_nar_view_name('product.partial.image_thumbnails'), compact('product','prefix')) !!}
		</div>
		<div class="summary entry-summary">
			<h1 itemprop="name" class="product_title entry-title"><?php echo $product->title() ?></h1>
			{!! view(cd_nar_view_name('product.partial.ratings'), compact('product','prefix')) !!}
			{!! view(cd_nar_view_name('product.partial.sizes'), compact('product','prefix')) !!}
			{!! view(cd_nar_view_name('product.partial.price'), compact('product','prefix')) !!}
			{!! view(cd_nar_view_name('product.partial.add_to_cart'), compact('product','prefix')) !!}
		</div><!-- .summary -->
		<div class="woocommerce-tabs wc-tabs-wrapper">
			<div class="tab-content">
				{!! view(cd_nar_view_name('product.partial.reviews'), compact('product')) !!}
			</div>
		</div>
	</div><!-- #product-2138 -->
</div>
<meta itemprop="url" content="<?php echo $product->url() ?>" />
@stop