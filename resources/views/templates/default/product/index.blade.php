<?php $prefix = 'product'; ?>
@extends(cd_nar_template())
@section('body_class', 'single single-product postid-2138 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', $product->metaTitle())
@section('meta_keywords', $product->metaKeywords())
@section('meta_description', $product->metaDescription())
@section('main_content_class', 'main-content-shop')
@section('head_bottom')
<style type="text/css">
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{
        border:1px solid white !important;
    }
</style>
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
            <!-- .summary -->

            <!-- description tab -->
            <div class="woocommerce-tabs wc-tabs-wrapper">
                <ul class="tabs wc-tabs nav nav-tabs">
                    <li class="overview_tab active">
                        <a href="#tab-overview" aria-controls="tab-overview"  data-toggle="tab">Overview</a>
                    </li>
                    <li class="description_tab">
                        <a href="#tab-description" aria-controls="tab-description"  data-toggle="tab">Description</a>
                    </li>
                    <li class="description_tab">
                        <a href="#tab-shipping" aria-controls="tab-shipping"  data-toggle="tab">Shipping Info</a>
                    </li>
                    <li class="reviews_tab">
                        <a href="#tab-reviews" aria-controls="tab-reviews"  data-toggle="tab">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    {!! view(cd_nar_view_name('product.partial.info'), compact('product')) !!}
                    {!! view(cd_nar_view_name('product.partial.reviews'), compact('product')) !!}
                </div>
            </div>
            <!-- description tab -->


        </div>
        <div class="related products">
            {!! view(cd_nar_view_name('product.partial.related.like'), compact('product')) !!}
        </div>
    </div><!-- #product-2138 -->
</div>
<meta itemprop="url" content="<?php echo $product->url() ?>" />
@stop