<?php
if(empty($product))
{
	return null;
}
$config = [];
$weave = [];
$weave[$product->customRug()->id()]['name'] = $product->customRug()->title();
$weave[$product->customRug()->id()]['index'] = strtolower($product->customRug()->title());
$weave[$product->customRug()->id()]['price'] = $product->customRug()->price();
$sizes = $product->viewableSizes();
if(!empty($sizes))
{
	$s = [];
	foreach ($sizes as $size)
	{
		$s[$size->id()] = $size->name();
	}
	$weave['size'] = $s;
}

$config['weaves'] = $weave;
$config['borderColors'] = $customRugs['borderColors'];
$config['shapes'] = $customRugs['shapes'];
$config['corners'] = $customRugs['corners'];
$config['bindings'] = $customRugs['bindings'];
$config['dimension'] = $customRugs['dimension'];
?>
<style type="text/css">

</style>
<script type="text/javascript">
	var assetPrefix = '<?php echo cd_nar_asset('customrugs') ?>';
	var categoryType = '<?php echo $category['type']?>';
	/**
	 * Return the current floor style index
	 * @returns string
	 */
	function cr_getFloorStyle()
	{
		return jQuery('#cr_floorStyle').val();
	}
	function cr_changeFloorStyle(CustomRugsObj)
	{
		cr_changeShape(CustomRugsObj);
	}
	function cr_changeBorderColor(CustomRugsObj)
	{
		cr_changeShape(CustomRugsObj);
	}
	function cr_updateDimension(CustomRugsObj)
	{
		var prefix = CustomRugsObj._prefix;
		jQuery('#' + prefix + 'dimension-string-wrapper').show();
		jQuery('#' + prefix + 'dimension-string').text(CustomRugsObj._dimensionString);
	}
	function cr_changeShape(CustomRugsObj)
	{
		var shape = CustomRugsObj._shape;
		if (shape === null)
		{
			shape = 'rectangle';
		}
		var prefix = CustomRugsObj._prefix;
		var classes = 'shape-rectangle shape-octagon shape-oval shape-round';
		var floorShape = jQuery('#' + prefix + 'image-floorshape');
		var floorStyle = cr_getFloorStyle();
		var colorShape = jQuery('#' + prefix + 'image-colorshape');
		var dimensionString = jQuery('#' + prefix + 'dimension-string');
		var weave = jQuery('#' + prefix + 'image-weave');
		jQuery('#' + prefix + 'weave-image-wrapper').remove();
		weave.css('background-image', 'unset');
		floorShape.removeClass(classes).addClass('shape-' + shape).css('background-image');
		colorShape.removeClass(classes).addClass('shape-' + shape).css('background-image');
		dimensionString.removeClass(classes).addClass('shape-' + shape);
		if (shape == 'rectangle')
		{
			floorShape.parent().hide();
			colorShape.parent().hide();
			weave.css('background-image', 'url(' + assetPrefix + '/floors/' + floorStyle + '.jpg)');
			weave.append('<div id="' + prefix + 'weave-image-wrapper"><img class="category-type-'+categoryType+' border-' + CustomRugsObj._borderColor + '" src="' + assetPrefix + '/weaves/' + CustomRugsObj._weaveIndex + '.jpg" alt="" id="' + prefix + 'weave-image"/></div>');
			return;
		}
		floorShape.parent().show();
		colorShape.parent().show();
		weave.css('background-image', 'url(' + assetPrefix + '/weaves/' + CustomRugsObj._weaveIndex + '.jpg)');
		floorShape.css('background-image', 'url(' + assetPrefix + '/floors/' + shape + '/' + floorStyle + '.png)');
		colorShape.css('background-image', 'url(' + assetPrefix + '/colors/' + shape + '/' + CustomRugsObj._borderColor + '.png)');
	}
	var CustomRugs = function() {
		_this = this;
		_this._prefix = 'cr_';
		_this._weaveType = '<?php echo $product->customRug()->weaveType() ?>';// wool or stairtreads
		_this._selectionType = 'custom';// custom or standard sizes
		_this._config = {};
		_this._log = true;

		/**
		 * The Form Object
		 */
		_this._form = null;
		_this._singleWeave = true; // True if only a single weave
		/**
		 * The width
		 */
		_this._inchPrecision = false;
		_this._widthTotal = 0;
		_this._width = null;
		_this._widthInch = null;

		/**
		 * The height
		 */
		_this._heightTotal = 0;
		_this._height = null;
		_this._heightInch = null;

		/**
		 * The Area
		 */
		_this._totalArea = 0;
		/**
		 * Total Dimension
		 */
		_this._totalDimension = 0;
		/**
		 * The Dimension string e.g. 6'12" x 6'12"
		 */
		_this._dimensionString = null;

		/**
		 * The Weave
		 */
		_this._weave = null;
		_this._weaveIndex = null;

		/**
		 * The Shape
		 */
		_this._shape = null;

		/**
		 * Border Color
		 */
		_this._borderColor = null;

		/**
		 * Border Width
		 */
		_this._binding = null;

		/**
		 * Corner
		 */
		_this._corner = null;

		/**
		 * Qty
		 */
		_this._qty = null;

		/**
		 * The Final Price
		 */
		_this._customRugPrice = 0.00;

		/**
		 * The Error Flag
		 */
		_this._errorFlag = false;
		/**
		 * Error Msgs
		 */
		_this._errorMsgSizeLimit = 'Please set size. (Within limits)';

		/**
		 * Setup
		 * @returns void
		 */
		_this._setup = function()
		{
			_this._config = jQuery.parseJSON('<?php echo json_encode($config) ?>');
			_this._form = jQuery('#' + _this._prefix + 'form');
			_this._log('_setup');
			if (_this._singleWeave)
			{
				_this._changeWeave(jQuery('#' + _this._prefix + 'weave').val());
			}
			_this._changeBorderColor(jQuery('#' + _this._prefix + 'borderColor').val());
			_this._changeShape(jQuery('#' + _this._prefix + 'shape').val());
			_this._changeQty(1);
			if (jQuery('#' + _this._prefix + 'selectionType').length > 0)
			{
				jQuery('#' + _this._prefix + 'selectionType').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._selectionType = jQuery(this).val();
				});
			}
			if (jQuery('#' + _this._prefix + 'qty').length > 0)
			{
				jQuery('#' + _this._prefix + 'qty').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeQty(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'width').length > 0)
			{
				jQuery('#' + _this._prefix + 'width').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeWidth(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'widthInch').length > 0)
			{
				_this._inchPrecision = true;
				jQuery('#' + _this._prefix + 'widthInch').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeWidthInch(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'height').length > 0)
			{
				jQuery('#' + _this._prefix + 'height').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeHeight(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'heightInch').length > 0)
			{
				_this._inchPrecision = true;
				jQuery('#' + _this._prefix + 'heightInch').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeHeightInch(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'weave').length > 0)
			{
				jQuery('#' + _this._prefix + 'weave').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeWeave(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'shape').length > 0)
			{
				jQuery('#' + _this._prefix + 'shape').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeShape(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'borderColor').length > 0)
			{
				jQuery('#' + _this._prefix + 'borderColor').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeBorderColor(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'binding').length > 0)
			{
				jQuery('#' + _this._prefix + 'binding').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeBinding(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'corner').length > 0)
			{
				jQuery('#' + _this._prefix + 'corner').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeCorner(jQuery(this).val());
				});
			}
			if (jQuery('#' + _this._prefix + 'rugpad').length > 0)
			{
				jQuery('#' + _this._prefix + 'rugpad').change(function() {
					_this._errorFlag = false;
					jQuery('#' + _this._prefix + 'errorMsgWrapper').hide();
					_this._changeRugpad(jQuery(this).val());
				});
			}
			/**
			 * Form Submit
			 */
			_this._form.submit(function(e) {
				if (!_this._validate())
				{
					jQuery(this).submit();
				}
				return false;
			});
		};

		/**
		 * Start the custom rugs
		 * @returns {undefined}
		 */
		_this._start = function()
		{
			_this._log('_start: weaveType: ' + _this._weaveType + ' type: ' + _this._type);
		};

		/**
		 * Return the Selected Weave Price
		 * @return float
		 */
		_this._getSelectedWeavePrice = function()
		{
			if (_this._config.weaves[_this._weave] !== undefined)
			{
				return parseFloat(_this._config.weaves[_this._weave].price);
			}
			return 0;
		};

		/**
		 * Return the Binding price
		 * @returns float
		 */
		_this._getBindingPrice = function() {
			var bindingOption = {};
			if (_this._binding == 'blindStitchCotton')
			{
				bindingOption = _this._config.bindings.blindStitchCotton;
			}
			else if (_this._binding == 'extraWideCotton')
			{
				bindingOption = _this._config.bindings.extraWideCotton;
			}
			else {
				bindingOption = _this._config.bindings.wideCotton;
			}
			if (_this._totalArea <= 50)
			{
				return parseFloat(bindingOption.priceOne);
			} else {
				return parseFloat(bindingOption.priceTwo);
			}
			return null;
		};

		/**
		 * Update the Price
		 * @returns void
		 */
		_this._updatePrice = function()
		{
			_this._log('_updatePrice');
			if (_this._totalArea < 1)
			{
				jQuery('#' + _this._prefix + 'statusRugPrice').show().text('$ ' + '0.00');
				jQuery('#' + _this._prefix + 'statusTotalPrice').show().text('$ ' + '0.00');
				return false;
			}
			_this._customRugPrice = _this._getSelectedWeavePrice() * _this._totalArea;
			/**
			 * Area
			 */
			if (_this._totalArea > 150 && _this._totalArea <= 390)
			{
				_this._customRugPrice += 150.0;
			}
			if (_this._totalArea > 391 && _this._totalArea <= 780)
			{
				_this._customRugPrice += 300.0;
			}
			if (_this._totalArea > 781 && _this._totalArea <= 1275)
			{
				_this._customRugPrice += 450.0;
			}
			var bindingPrice = _this._getBindingPrice();
			if (bindingPrice !== null)
			{
				_this._customRugPrice += (_this._totalDimension * (2.0 * bindingPrice));
			}

			/**
			 * Shape
			 */
			if (_this._shape == 'round' || _this._shape == 'oval' || _this._shape === 'octagon') {
				if ((_this._totalDimension) / 2 >= 8)
				{
					_this._customRugPrice += 150.0;
				}
				else if ((_this._totalDimension) / 2 >= 6)
				{
					_this._customRugPrice += 110.0;
				}
				else
				{
					_this._customRugPrice += 75.0;
				}
			}

			/**
			 * Corner
			 */
			if (_this._corner === 'mittered')
			{
				_this._customRugPrice += 1;
			}

			if (typeof (cr_updatePrice) == "function")
			{
				cr_updatePrice(_this);
			}
			jQuery('#' + _this._prefix + 'statusRugPrice').show().text('$ ' + _this._customRugPrice.formatMoney(2));
			jQuery('#' + _this._prefix + 'statusTotalPrice').show().text('$ ' + (_this._customRugPrice * _this._qty).formatMoney(2));
			jQuery('#' + _this._prefix + 'rugpriceInput').val(_this._customRugPrice);
			_this._log('_customRugPrice: ' + _this._customRugPrice);
		};

		/**
		 * Change Qty
		 * @param int qty
		 * @param callback cb
		 * @returns void
		 */
		_this._changeQty = function(qty, cb)
		{
			_this._log('_changeQty: ' + qty);
			_this._qty = qty;
			jQuery('#' + _this._prefix + 'statusQty').text(qty);
			jQuery('#' + _this._prefix + 'qtyInput').val(qty);
			_this._updatePrice();
			if (typeof (cr_changeQty) == "function")
			{
				cr_changeQty(_this);
			}
		};

		/**
		 * Dimension changed
		 * @returns void
		 */
		_this._updateDimension = function()
		{
			var idx = 0;
			var dimension = new Array();
			if (_this._width !== null)
			{
				dimension[idx] = _this._width + '\'';
				_this._widthTotal = parseInt(_this._width);
				idx++;
			} else {
				_this._widthTotal = 0;
				dimension[idx] = '0\'';
				idx++;
			}
			if (_this._inchPrecision)
			{
				if (_this._widthInch === null)
				{
					dimension[idx] = '0\"';
				} else {
					dimension[idx] = _this._widthInch + '"';
					_this._widthTotal = _this._widthTotal + (parseInt(_this._widthInch) / 12);
				}
				idx++;
			}
			if (_this._height !== null)
			{
				_this._heightTotal = parseInt(_this._height);
				dimension[idx] = ' x ' + _this._height + '\'';
				idx++;
			} else {
				_this._heightTotal = 0;
				dimension[idx] = ' x 0\'';
				idx++;
			}

			if (_this._inchPrecision)
			{
				if (_this._heightInch === null)
				{
					dimension[idx] = '0"';
				} else {
					dimension[idx] = _this._heightInch + '"';
					_this._heightTotal = _this._heightTotal + (parseInt(_this._heightInch) / 12);
				}
			}
			/**
			 * Check Limits
			 */
			if (_this._widthTotal < _this._config.dimension.width.min
					|| _this._widthTotal > _this._config.dimension.width.max
					|| _this._heightTotal < _this._config.dimension.height.min
					|| _this._heightTotal > _this._config.dimension.height.max)
			{
				_this._errorFlag = true;
				_this._errorMsg(_this._errorMsgSizeLimit);
			}
			_this._totalArea = _this._widthTotal * _this._heightTotal;
			_this._totalDimension = _this._widthTotal + _this._heightTotal;
			_this._dimensionString = dimension.join('');
			_this._log('_updateDimension: ' + dimension.join(''));
			_this._log('_widthTotal: ' + _this._widthTotal);
			_this._log('_heightTotal: ' + _this._heightTotal);
			_this._log('_totalArea: ' + _this._totalArea);
			_this._log('_totalDimension: ' + _this._totalDimension);
			jQuery('#' + _this._prefix + 'statusDimension').text(_this._dimensionString);
			jQuery('#' + _this._prefix + 'sizeInput').val(_this._dimensionString);
			if (typeof (cr_updateDimension) == "function")
			{
				cr_updateDimension(_this);
			}
		};

		/**
		 * Change Width
		 * @param int width
		 * @param callback cb
		 * @returns void
		 */
		_this._changeWidth = function(width, cb)
		{
			_this._log('_changeWidth: ' + width);
			_this._width = parseInt(width);
			if (typeof (cr_changeWidth) == "function")
			{
				cr_changeWidth(_this);
			}
			_this._updateDimension();
			_this._updatePrice();
		};

		/**
		 * Change Width Inch
		 * @param int widthInch
		 * @param callback cb
		 * @returns void
		 */
		_this._changeWidthInch = function(widthInch, cb)
		{
			_this._log('_changeWidthInch: ' + widthInch);
			_this._widthInch = parseInt(widthInch);
			if (typeof (cr_changeWidthInch) == "function")
			{
				cr_changeWidthInch(_this);
			}
			_this._updateDimension();
			_this._updatePrice();
		};

		/**
		 * Change height
		 * @param int height
		 * @param callback cb
		 * @returns void
		 */
		_this._changeHeight = function(height, cb)
		{
			_this._log('_changeHeight: ' + height);
			_this._height = parseInt(height);
			if (typeof (cr_changeHeight) == "function")
			{
				cr_changeHeight(_this);
			}
			_this._updateDimension();
			_this._updatePrice();
		};

		/**
		 * Change height inches
		 * @param int height inches
		 * @param callback cb
		 * @returns void
		 */
		_this._changeHeightInch = function(heightInch, cb)
		{
			_this._log('_changeHeightInch: ' + heightInch);
			_this._heightInch = parseInt(heightInch);
			if (typeof (cr_changeHeightInch) == "function")
			{
				cr_changeHeightInch(_this);
			}
			_this._updateDimension();
			_this._updatePrice();
		};

		/**
		 * Change Weave
		 * @param string weave
		 * @param callback cb
		 * @returns void
		 */
		_this._changeWeave = function(weave, cb)
		{
			_this._log('_changeWeave: ' + weave);
			_this._weave = null;
			if (_this._config.weaves[weave] !== undefined && weave !== null && weave !== '')
			{
				_this._weave = weave;
				_this._weaveIndex = _this._config.weaves[weave].index;
				jQuery('#' + _this._prefix + 'statusWeave').text(_this._config.weaves[weave].name);
				jQuery('#' + _this._prefix + 'weaveInput').val(_this._config.weaves[weave].name);
			}
			if (typeof (cr_changeWeave) == "function")
			{
				cr_changeWeave(_this);
			}
			_this._updatePrice();
		};

		/**
		 * Change Border color
		 * @param string borderColor
		 * @param callback cb
		 * @returns void
		 */
		_this._changeBorderColor = function(borderColor, cb)
		{
			_this._log('_changeBorderColor: ' + borderColor);
			_this._borderColor = null;
			if (_this._config.borderColors[borderColor] !== undefined && borderColor !== null && borderColor !== '')
			{
				_this._borderColor = borderColor;
				jQuery('#' + _this._prefix + 'statusBorderColor').text(_this._config.borderColors[borderColor].name);
				jQuery('#' + _this._prefix + 'borderColorInput').val(_this._config.borderColors[borderColor].name);
			}
			if (typeof (cr_changeBorderColor) == "function")
			{
				cr_changeBorderColor(_this);
			}
			_this._updatePrice();
		};

		/**
		 * Change Binding
		 * @param string binding
		 * @param callback cb
		 * @returns void
		 */
		_this._changeBinding = function(binding, cb)
		{
			_this._log('_changeBinding: ' + binding);
			_this._binding = null;
			if (_this._config.bindings[binding] !== undefined && binding !== null && binding !== '')
			{
				_this._binding = binding;
				jQuery('#' + _this._prefix + 'statusBinding').text(_this._config.bindings[binding].name.replace('&#039;', '"'));
				jQuery('#' + _this._prefix + 'bindingInput').val(_this._config.bindings[binding].name.replace('&#039;', '"'));
			}
			if (typeof (cr_changeBinding) == "function")
			{
				cr_changeBinding(_this);
			}
			_this._updatePrice();
		};

		/**
		 * Change Corner
		 * @param string corner
		 * @param callback cb
		 * @returns void
		 */
		_this._changeCorner = function(corner, cb)
		{
			_this._log('_changeCorner: ' + corner);
			_this._corner = null;
			if (_this._config.corners[corner] !== undefined && corner !== null && corner !== '')
			{
				_this._corner = corner;
				jQuery('#' + _this._prefix + 'statusCorner').text(_this._config.corners[corner].name);
				jQuery('#' + _this._prefix + 'cornerInput').val(_this._config.corners[corner].name);
			}
			if (typeof (cr_changeCorner) == "function")
			{
				cr_changeCorner(_this);
			}
			_this._updatePrice();
		};

		/**
		 * Change Shape
		 * @param string shape
		 * @param callback cb
		 * @returns void
		 */
		_this._changeShape = function(shape, cb)
		{
			_this._log('_changeShape: ' + shape);
			_this._shape = null;
			if (_this._config.shapes[shape] !== undefined && shape !== null && shape !== '')
			{
				_this._shape = shape;
				jQuery('#' + _this._prefix + 'statusShape').text(_this._config.shapes[shape].name);
				jQuery('#' + _this._prefix + 'shapeInput').val(_this._config.shapes[shape].name);
			}
			if (typeof (cr_changeShape) == "function")
			{
				cr_changeShape(_this);
			}
			_this._updatePrice();
		};

		/**
		 * Change Rugpad
		 * @param int rugpad
		 * @param callback cb
		 * @returns void
		 */
		_this._changeRugpad = function(rugpad, cb)
		{
			_this._log('_changeRugpad: ' + rugpad);
			_this._rugpad = rugpad;
			if (typeof (cr_changeRugpad) == "function")
			{
				cr_changeRugpad(_this);
			}
			_this._updatePrice();
		};

		/**
		 * Validate custom rug
		 * @returns {undefined}
		 */
		_this._validate = function()
		{
			if(_this._totalArea === 0)
			{
				_this._errorMsg('Please define the rug size.');
				return true;
			}
			if(_this._shape === null && jQuery('#' + _this._prefix + 'shapeInput').length > 0)
			{
				_this._errorMsg('No Shape was selected.');
				return true;
			}
			if(_this._borderColor === null && jQuery('#' + _this._prefix + 'corderColorInput').length > 0)
			{
				_this._errorMsg('No Border Color selected.');
				return true;
			}
			if(_this._binding === null && jQuery('#' + _this._prefix + 'bindingInput').length > 0)
			{
				_this._errorMsg('No Binding selected.');
				return true;
			}
			if(_this._corner === null && jQuery('#' + _this._prefix + 'cornerInput').length > 0)
			{
				_this._errorMsg('No Corner selected.');
				return true;
			}
			return false;
		};

		/**
		 * Render an Error Msg
		 * @param string msg
		 * @returns void
		 */
		_this._errorMsg = function(msg)
		{
			jQuery('#' + _this._prefix + 'errorMsg').text(msg);
			jQuery('#' + _this._prefix + 'errorMsgWrapper').show();
		};

		/**
		 * Log a Message
		 * @param string msg
		 * @returns {undefined}
		 */
		_this._log = function(msg)
		{
			if (console !== undefined)
			{
				console.log('CustomRugs: ' + msg);
			}
		};

		return {
			init: function(weaveType, type, config) {
				_this._config = config;
				_this._weaveType = weaveType;
				_this._type = type;
				_this._setup();
				_this._start();
				return _this;
			},
			setWeaveType: function(weaveType)
			{
				_this._console('setWeaveType: ' + weaveType);
				_this._weaveType = weaveType;
			},
			setSelectionType: function(selectionType)
			{
				_this._console('setType: ' + selectionType);
				_this._selectionType = selectionType;
			},
			changeQty: function(qty)
			{
				_this._changeQty(qty);
			},
			changeWidth: function(width)
			{
				_this._changeWidth(width);
			},
			changeWidthInch: function(widthInch)
			{
				_this._changeWidthInch(widthInch);
			},
			changeHeight: function(height)
			{
				_this._changeHeight(height);
			},
			changeHeightInch: function(heightInch)
			{
				_this._changeHeightInch(heightInch);
			},
			changeWeave: function(weave)
			{
				_this._changeWeave(weave);
			},
			changeBorderColor: function(borderColor)
			{
				_this._changeBorderColor(borderColor);
			},
			changeShape: function(shape)
			{
				_this._changeShape(shape);
			},
			changeBinding: function(binding)
			{
				_this._changeBinding(binding);
			},
			changeCorner: function(corner)
			{
				_this._changeCorner(corner);
			},
			changeRugpad: function(rugpad)
			{
				_this._changeRugpad(rugpad);
			}
		};
	}();


	jQuery(document).ready(function() {
		var CustomRugsObj = CustomRugs.init('sisal', 'custom', {});
		jQuery('.cr_floor-style').click(function(e) {
			e.preventDefault();
			jQuery('#cr_floorStyle').val(jQuery(this).attr('data-floorindex'));
			cr_changeFloorStyle(CustomRugsObj);
		});
		jQuery('.cr_borderColor').click(function(e) {
			e.preventDefault();
			jQuery('.cr_borderColor').removeClass('selected');
			jQuery(this).addClass('selected');
			CustomRugsObj._changeBorderColor(jQuery(this).attr('data-colorindex'));
		});
	});
</script>