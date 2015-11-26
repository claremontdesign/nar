<?php
$prefix = 'cr_';
$category = $category['type'];
$singleWeave = !empty($customRugs['singleWeave']) ? true : false;
$selectionType = !empty($customRugs['selectionType']) ? true : false;
if(empty($singleWeave))
{
	$selectionType = false;
}
$rugpad = !empty($customRugs['rugpad']) ? true : false;
$qty = !empty($customRugs['qty']) ? true : false;
$borderColor = !empty($customRugs['borderColor']) ? true : false;
$binding = !empty($customRugs['binding']) ? true : false;
$shape = !empty($customRugs['shape']) ? true : false;
$corner = !empty($customRugs['corner']) ? true : false;
$floor = !empty($customRugs['floor']) ? true : false;

if($category == 'stairtreads')
{
	$shape = false;
	$rugpad = false;
	$binding = false;
	$corner = false;
}
if($category == 'wool')
{
	$shape = false;
	$rugpad = false;
	$binding = false;
	$corner = false;
	$borderColor = false;
}

$borderColorDefault = 'tan';
$cornerDefault = 'standard';
$bindingDefault = 'wide';
$shapeDefault = 'rectangle';
$weaveDefault = $product->customRug()->id();
$selectionDefault = 'custom';
?>

<form method="post" action="<?php echo cd_config('nar.yahoo.form.addtocart') ?>" role="form" id="cr_form">
	<input type="hidden" value="<?php echo cd_config('nar_yahoo_form_vwcatalog') ?>" name="vwcatalog" />
	{{ csrf_field() }}
	<?php if(!empty($floor)): ?>
		<div class="cr_floors">
			<label>Change Floor Style</label>
			<div class="cr_floors_styles">
				<?php foreach ($customRugs['floors'] as $floorIndex => $floorOption): ?>
					<?php if(!empty($floorOption['enable'])): ?>
						<img class="cr_floor-style" data-floorindex="<?php echo $floorIndex ?>" src="<?php echo cd_nar_asset('customrugs') ?>/floors/thumbnails/<?php echo $floorIndex ?>.jpg" alt="<?php echo $floorOption['name'] ?>" />
					<?php endif; ?>
				<?php endforeach; ?>
				<div class="clearfix"></div>
			</div>
			<input type="hidden" name="cr_floorType" id="cr_floorStyle" value="beech"/>
		</div>
	<?php endif; ?>

	<?php if($selectionType): ?>
		<div class="form-group">
			<label for="cr_selectionType">Selection Type</label>
			<select class="form-control" name="selectionType" id="cr_selectionType">
				<option id="cr_selectionType_custom" value="custom">Custom Rugs</option>
				<option id="cr_selectionType_standard" value="standard">Standard</option>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="<?php echo $selectionDefault ?>" name="selectionType" id="cr_selectionType">
	<?php endif; ?>
	<?php if(empty($singleWeave)): ?>
		<div class="form-group">
			<label for="cr_weave">Weave</label>
			<select class="form-control" name="weave" id="cr_weave">
				<?php foreach ($customRugs['category'] as $categoryName => $category): ?>
					<?php if(!empty($category['items'])): ?>
						<?php foreach ($category['items'] as $item): ?>
							<?php
							$item = !empty($customRugs['items'][$item]['enable']) ? $customRugs['items'][$item] : false;
							?>
							<?php if(!empty($item)): ?>
								<option id="cr_selectionType_<?php echo strtolower($item) ?>" value="<?php echo strtolower($item) ?>"><?php echo $item ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="<?php echo $weaveDefault ?>" name="weave" id="cr_weave">
	<?php endif; ?>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="cr_width">Width (Ft)</label>
				<select class="form-control" name="width" id="cr_width">
					<option value="0">0</option>
					<?php for ($x = 1; $x <= 13; $x++): ?>
						<option id="cr_width_<?php echo $x ?>" value="<?php echo $x ?>"><?php echo $x ?></option>
					<?php endfor; ?>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="cr_widthInch">Inch</label>
				<select class="form-control" name="widthInch" id="cr_widthInch">
					<option value="0">0</option>
					<?php for ($x = 1; $x < 12; $x++): ?>
						<option id="cr_widthInch_<?php echo $x ?>"  value="<?php echo $x ?>"><?php echo $x ?></option>
					<?php endfor; ?>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="cr_height">Height (Ft)</label>
				<select class="form-control" name="height" id="cr_height">
					<option value="0">0</option>
					<?php for ($x = 1; $x <= 20; $x++): ?>
						<option id="cr_height_<?php echo $x ?>"  value="<?php echo $x ?>"><?php echo $x ?></option>
					<?php endfor; ?>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="cr_heightInch">Inch</label>
				<select class="form-control" name="heightInch" id="cr_heightInch">
					<option value="0">0</option>
					<?php for ($x = 1; $x < 12; $x++): ?>
						<option id="cr_heightInch_<?php echo $x ?>"  value="<?php echo $x ?>"><?php echo $x ?></option>
					<?php endfor; ?>
				</select>
			</div>
		</div>
	</div>

	<?php if(!empty($shape)): ?>
		<div class="form-group">
			<label for="cr_shape">Shape</label>
			<select class="form-control" name="shape" id="cr_shape">
				<?php foreach ($customRugs['shapes'] as $shapeIndex => $shapeOption): ?>
					<?php if(!empty($shapeOption['enable'])): ?>
						<option id="cr_shape_<?php echo $shapeIndex ?>" value="<?php echo $shapeIndex ?>"><?php echo $shapeOption['name'] ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="<?php echo $shapeDefault ?>" name="shape" id="cr_shape">
	<?php endif; ?>
	<?php if(!empty($borderColor)): ?>
		<div class="form-group">
			<label for="cr_borderColor">Border Color</label>

			<!--			<select class="form-control" name="borderColor" id="cr_borderColor">
			<?php foreach ($customRugs['borderColors'] as $colorIndex => $colorOption): ?>
				<?php if(!empty($colorOption['enable'])): ?>
															<option id="cr_borderColor_<?php echo $colorIndex; ?>" value="<?php echo $colorIndex ?>"><?php echo $colorOption['name']; ?></option>
				<?php endif; ?>
			<?php endforeach; ?>
						</select>-->

			<div class="cr_borderColors">
				<?php foreach ($customRugs['borderColors'] as $colorIndex => $colorOption): ?>
					<?php if(!empty($colorOption['enable'])): ?>
						<a href="#" class="cr_borderColor cr_borderColor-<?php echo $colorIndex ?> <?php echo $borderColorDefault == $colorIndex ? 'selected' : '' ?>" data-colorindex="<?php echo $colorIndex ?>"><?php echo $colorOption['name']; ?></a>
					<?php endif; ?>
				<?php endforeach; ?>
				<input type="hidden" value="<?php echo $borderColorDefault ?>" name="borderColor" id="cr_borderColor">
				<div class="clearfix"></div>
			</div>
		</div>
	<?php else: ?>
		<input type="hidden" value="<?php echo $borderColorDefault ?>" name="borderColor" id="cr_borderColor">
	<?php endif; ?>
	<?php if(!empty($binding)): ?>
		<div class="form-group">
			<label for="cr_binding">Binding</label>
			<select class="form-control" name="binding" id="cr_binding">
				<option value="">-</option>
				<?php foreach ($customRugs['bindings'] as $bindingName => $bindingOption): ?>
					<?php if(!empty($bindingOption['enable'])): ?>
						<option id="cr_binding_<?php echo $bindingName ?>" value="<?php echo $bindingName ?>"><?php echo $bindingOption['name'] ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="wide" name="<?php echo $bindingDefault ?>" id="cr_binding">
	<?php endif; ?>
	<?php if(!empty($corner)): ?>
		<div class="form-group">
			<label for="cr_corner">Corner</label>
			<select class="form-control" name="corner" id="cr_corner">
				<option value="">-</option>
				<?php foreach ($customRugs['corners'] as $cornerIndex => $cornerOption): ?>
					<?php if(!empty($cornerOption['enable'])): ?>
						<option id="cr_corner_<?php echo $cornerIndex ?>" value="<?php echo $cornerIndex ?>"><?php echo $cornerOption['name'] ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="<?php echo $cornerDefault ?>" name="corner" id="cr_corner">
	<?php endif; ?>
	<?php if(!empty($qty)): ?>
		<div class="form-group">
			<label for="cr_qty">Quantity</label>
			<select class="form-control" name="qty" id="cr_qty">
				<?php for ($x = 1; $x <= 24; $x++): ?>
					<option value="<?php echo $x ?>"><?php echo $x ?></option>
				<?php endfor; ?>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="1" name="qty" id="cr_qty">
	<?php endif; ?>
	<?php if(!empty($rugpad)): ?>
		<div class="form-group">
			<label for="cr_rugpad">Rugpad</label>
			<select class="form-control" name="rugpad" id="cr_rugpad">
				<option id="cr_rugpad_yes" value="yes">Yes</option>
				<option id="cr_rugpad_no" value="no">No</option>
			</select>
		</div>
	<?php else: ?>
		<input type="hidden" value="no" name="rugpad" id="cr_rugpad">
	<?php endif; ?>

	<div class="alert alert-danger" id="cr_errorMsgWrapper" style="display: none">
		<strong>Error!</strong>
		<span id="cr_errorMsg"></span>
	</div>

	<div id="cr_statusWrapper">
		<input type="hidden" name="vwitem1" value="ucustomrug" />
		<div class="status"><span class="statusLabel">Qty: </span><span class="cr_qty" id="cr_statusQty"></span></div>
		<input type="hidden" name="vwquantity1" id="cr_qtyInput" value=""/>

		<div class="status"><span class="statusLabel">Weave: </span><span class="cr_status" id="cr_statusWeave"></span></div>
		<input type="hidden" name="vwattr1_Weave" id="cr_weaveInput" value=""/>

		<div class="status"><span class="statusLabel">Size: </span><span class="cr_status" id="cr_statusDimension"></span></div>
		<input type="hidden" name="vwattr1_Item Size" id="cr_sizeInput" value=""/>

		<?php if(!empty($shape)): ?>
			<div class="status"><span class="statusLabel">Shape: </span><span class="cr_status" id="cr_statusShape"></span></div>
			<input type="hidden" name="vwattr1_Shape" id="cr_shapeInput" value=""/>
		<?php endif; ?>
		<?php if(!empty($binding)): ?>
			<div class="status"><span class="statusLabel">Border: </span><span class="cr_status" id="cr_statusBinding"></span></div>
			<input type="hidden" name="vwattr1_Stitch" id="cr_bindingInput" value=""/>
		<?php endif; ?>
		<?php if(!empty($corner)): ?>
			<div class="status"><span class="statusLabel">Corner Style: </span><span class="cr_status" id="cr_statusCorner"></span></div>
			<input type="hidden" name="vwattr1_Corner" id="cr_cornerInput" value=""/>
		<?php endif; ?>
		<?php if(!empty($borderColor)): ?>
			<div class="status"><span class="statusLabel">Border Color: </span><span class="cr_status" id="cr_statusBorderColor"></span></div>
			<input type="hidden" name="vwattr1_Border Color" id="cr_borderColorInput" value=""/>
		<?php endif; ?>
		<div class="status"><span class="statusLabel">Rug Price: </span><span class="cr_status" id="cr_statusRugPrice"></span></div>
		<?php if(!empty($rugPad)): ?>
			<div class="status"><span class="statusLabel">Rugpad Price: </span><span class="cr_status" id="cr_statusRugpadPrice"></span></div>
		<?php endif; ?>
		<input type="hidden" name="vwprice1" id="cr_rugpriceInput" value=""/>
		<div class="status"><span class="statusLabel">Total Price: </span><span class="cr_status" id="cr_statusTotalPrice"></span></div>
	</div>

	<input type="hidden" name="selectionTypeInput" id="cr_selectionTypeInput" value=""/>
	<input type="submit" id="cr_buttonSubmit" class="single_add_to_cart_button button alt" name="btnCustomRug" value="Buy Custom Rug" />
</form>