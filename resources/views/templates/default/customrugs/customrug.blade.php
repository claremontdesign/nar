@extends(cd_nar_template())
@section('body_class', 'single single-product postid-2138 woocommerce woocommerce-page header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive columns-3')
@section('meta_title', 'Custom Rugs')
@section('meta_keywords', '')
@section('meta_description', '')
@section('body_bottom')
{!! view(cd_nar_view_name('customrugs.partial.js'), compact('product', 'customRugs','category')) !!}
@append
@section('content')
<?php
$categoryTitle = 'Build your own rug';
if($category['type'] == 'wool')
{
	$categoryTitle = 'Custom Broadloom';
}
if($category['type'] == 'stairtreads')
{
	$categoryTitle = 'Custom Stair Treads';
}
$prefix = 'cr_';
?>
<style type="text/css">
	#<?php echo $prefix ?>image-wrapper{}
	#<?php echo $prefix ?>image-wrapper-inner{}
	#<?php echo $prefix ?>image-weave{}
	#<?php echo $prefix ?>image-shape{}
	#<?php echo $prefix ?>image-floorshape-wrapper{
		position: relative;
	}
	#<?php echo $prefix ?>image-floorshape{
		position: absolute;
		top:-600px;
		width: 500px;
		height: 600px;
	}
	#<?php echo $prefix ?>image-colorshape-wrapper{
		position: relative;
	}
	#<?php echo $prefix ?>image-colorshape{
		position: absolute;
		top:-600px;
		width: 500px;
		height: 600px;
	}
	#<?php echo $prefix ?>image-size{}
	#<?php echo $prefix ?>image-weave{
		background-image: url('<?php echo cd_nar_asset('customrugs/weaves/zamora.jpg') ?>');
		width: 500px;
		height: 600px;
	}
	#<?php echo $prefix ?>weave-image-wrapper{
		padding: 50px;
	}
	#<?php echo $prefix ?>weave-image{
		border: 10px solid black;
		width: 400px;
		height: 500px;
		box-shadow: 5px 5px 25px #333;
	}
	#<?php echo $prefix ?>weave-image.category-type-wool{
		border: unset !important;
	}
	#<?php echo $prefix ?>dimension-string-wrapper{
		position: relative;
	}
	#<?php echo $prefix ?>dimension-string{
		position: absolute;
		width: auto;
		text-align: center;
		font-size: 30px;
		font-weight: bold;
		top: -480px;
		background: rgba(255,255,255,0.5);
		color: grey;
		margin: 0px auto !important;
		padding: 10px;
		left: 160px;
	}
	#<?php echo $prefix ?>dimension-string.shape-rectangle{
		top: -360px;
	}
	#<?php echo $prefix ?>dimension-string.shape-oval{
		top: -480px;
	}
	#<?php echo $prefix ?>dimension-string.shape-octagon{
		top: -410px;
	}
	#<?php echo $prefix ?>dimension-string.shape-round{
		top: -415px;
	}
	.border-black{
		border: 10px solid rgb(0, 0, 0) !important;
	}
	.border-sienna{
		border: 10px solid rgb(145, 103, 55) !important;
	}
	.border-tan{
		border: 10px solid rgb(177, 135, 63) !important;
	}
	.border-sagekhaki{
		border: 10px solid rgb(182, 146, 84) !important;
	}
	.border-brown{
		border: 10px solid rgb(92, 51, 23) !important;
	}
	.border-green{
		border: 10px solid rgb(77, 82, 50) !important;
	}
	.border-redcherryjubilee{
		border: 10px solid rgb(164, 63, 51) !important;
	}
	.border-natural{
		border: 10px solid rgb(255, 196, 105) !important;
	}
	.border-onyx{
		border: 10px solid rgb(33, 33, 33) !important;
	}
	.border-fossil{
		border: 10px solid rgb(77, 58, 26) !important;
	}
	.border-fudge{
		border: 10px solid rgb(50, 33, 16) !important;
	}
	.border-midnightblue{
		border: 10px solid rgb(35, 35, 50) !important;
	}
	.border-moss{
		border: 10px solid rgb(43, 46, 25) !important;
	}
	.cr_floors{
		margin-bottom: 20px;
	}
	.cr_floor-style{
		cursor: pointer;
		float: left;
		width: 40px;
		height: 40px;
		margin-right: 5px;
	}
	.cr_borderColors{}
	.cr_borderColor{
		display: block;
		text-indent: -9999px;
		float: left;
		width: 36px;
		height: 36px;
		border: 2px solid white;
		padding: 4px;
		margin: 0px 1px;
	}
	.cr_borderColor.selected{
		border: 2px solid gray;
	}
	.cr_borderColor:hover{
		border: 2px solid gray;
	}
	<?php foreach ($customRugs['borderColors'] as $colorIndex => $colorOption): ?>
		<?php if(!empty($colorOption['enable'])): ?>
			.cr_borderColor-<?php echo $colorIndex ?>{
				background-image: url('<?php echo cd_nar_asset('customrugs') ?>/colors/<?php echo $colorIndex ?>.jpg');
			}
		<?php endif; ?>
	<?php endforeach; ?>
</style>
<div id="content" class="main-content-inner" role="main">
	<div itemscope="" itemtype="http://schema.org/Product" id="product-<?php echo $product->id() ?>" class="post-<?php echo $product->id() ?> product type-product status-publish has-post-thumbnail ">
		<h1 itemprop="name" class="product_title entry-title"><?php echo $categoryTitle ?></h1>
		<div class="images">
			<div id="<?php echo $prefix ?>image-wrapper">
				<div id="<?php echo $prefix ?>image-wrapper-inner">
					<div id="<?php echo $prefix ?>image-wrapper-inner-inner">
						<div id="<?php echo $prefix ?>image-weave"></div>
						<div id="<?php echo $prefix ?>image-floorshape-wrapper" class="floor">
							<div id="<?php echo $prefix ?>image-floorshape"></div>
						</div>
						<div id="<?php echo $prefix ?>image-colorshape-wrapper" class="color">
							<div id="<?php echo $prefix ?>image-colorshape"></div>
						</div>
						<div id="<?php echo $prefix ?>dimension-string-wrapper" style="display: none;">
							<div id="<?php echo $prefix ?>dimension-string"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="summary entry-summary">
			<h1 itemprop="name" class="product_title entry-title"><?php echo $product->customRug()->title() ?></h1>
			{!! view(cd_nar_view_name('customrugs.partial.form'), compact('product', 'customRugs', 'category')) !!}
		</div><!-- .summary -->
	</div><!-- #product-2138 -->
</div>
<meta itemprop="url" content="<?php echo $product->url() ?>" />


@stop