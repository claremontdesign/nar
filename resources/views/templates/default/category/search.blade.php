<?php
if(!empty($products))
{
	$paginator = $products;
}
?>
@extends(cd_nar_template())
@section('body_class', 'category-index archive tax-product_cat term-jute term-136 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', 'Search Result')
@section('meta_keywords', 'Search Result')
@section('meta_description', 'Search Result')
@section('main_content_class', 'main-content-shop')
@section('content')
<div id="content" class="main-content-inner" role="main">

	<?php if(!empty($products)): ?>
		<h1 class="page-title">Search Results for: '<?php echo $keyword ?>'</h1>
	<?php else: ?>
		<h1 class="page-title">Search Products</h1>
	<?php endif; ?>

	{!! view(cd_narbase_view_name('product.partial.searchform'), compact('keyword')) !!}
	{!! view(cd_nar_view_name('rugfinder.partial.form'), compact('rugfinder')) !!}

	<?php if(!empty($keyword)): ?>
		<?php if(!empty($products)): ?>
			{!! view(cd_nar_view_name('category.partial.counter'), compact('paginator','category','products')) !!}
			{!! view(cd_nar_view_name('category.partial.sorting'), compact('category','products')) !!}
			{!! view(cd_nar_view_name('category.partial.list'), compact('category','products')) !!}
			{!! view(cd_cdbase_view_name('paginator.pagination'), compact('paginator')) !!}
		<?php endif; ?>
	<?php endif; ?>
</div>
@stop