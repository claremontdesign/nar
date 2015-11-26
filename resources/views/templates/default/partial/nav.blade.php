<?php
$nav = [
	'sisal' => [
		'anchor' => 'Sisal',
		'url' => '/sisal-rugs',
		'enable' => true,
		'child' => [
			'ready-to-ship' => [
				'anchor' => 'Ready To Ship',
				'url' => '/sisal-rugs/premade',
				'enable' => true,
			],
			'custom-border' => [
				'anchor' => 'Custom Border',
				'url' => '/sisal-rugs/custom-rug',
				'enable' => true,
			],
		],
	],
	'seagrass-mt-grass' => [
		'anchor' => 'Seagrass & Mt. Grass',
		'url' => '/sea-grass-rug-mountaingrass-rugs',
		'enable' => true,
		'child' => [
			'ready-to-ship' => [
				'anchor' => 'Ready To Ship',
				'url' => '/sea-grass-rug-mountaingrass-rugs/pre-made',
				'enable' => true,
			],
			'custom-border' => [
				'anchor' => 'Custom Border',
				'url' => '/sea-grass-rug-mountaingrass-rugs/custom-rug',
				'enable' => true,
			],
		],
	],
	'custom' => [
		'anchor' => 'Custom',
		'url' => '/custom-rugs',
		'enable' => true,
		'child' => [
			'custom-rugs' => [
				'anchor' => 'Custom Rugs',
				'url' => '/custom-rugs',
				'enable' => true,
			],
			'custom-broadloom' => [
				'anchor' => 'Custom Broadloom',
				'url' => '/custom-rugs/broadloom',
				'enable' => true,
			],
			'custom-stair-treads' => [
				'anchor' => 'Custom Stair Treads',
				'url' => '/custom-rugs/stair-treads',
				'enable' => true,
			],
		],
	],
	'stair-treads' => [
		'anchor' => 'Stair Treads',
		'url' => '/custom-stair-treads/carpet-stair-treads',
		'enable' => true,
	],
	'jute' => [
		'anchor' => 'Jute',
		'url' => '/jute-area-rugs',
		'enable' => true
	],
	'rugpads' => [
		'anchor' => 'Rug Pads',
		'url' => '/rugpads',
		'enable' => true
	],
	'contemporary' => [
		'anchor' => 'Contemporary',
		'url' => '/contemporary-rugs',
		'enable' => true,
	],
	'wool' => [
		'anchor' => 'Wool',
		'url' => '/custom-wool-rugs/pre-made',
		'enable' => true,
		'child' => [
			'ready-to-ship' => [
				'anchor' => 'Ready To Ship',
				'url' => '/custom-wool-rugs/pre-made',
				'enable' => true,
			],
			'custom-border' => [
				'anchor' => 'Custom Border',
				'url' => '/custom-wool-rugs/custom-rug',
				'enable' => true,
			],
		],
	],
	'shag' => [
		'anchor' => 'Shag',
		'url' => '/custom-shag-rugs',
		'enable' => true,
	],
	'runners' => [
		'anchor' => 'Runners',
		'url' => '/stair-runners',
		'enable' => true,
	],
	'specialty-items' => [
		'anchor' => 'Specialty Items',
		'url' => '#',
		'enable' => true,
		'child' => [
			'rugpads' => [
				'anchor' => 'Rug Pads',
				'url' => 'rugpads',
				'enable' => false,
			],
			'anti-fatigue-comfort-mats' => [
				'anchor' => 'Anti Fatigue Comfort Mats',
				'url' => '/anti-fatigue-mats',
				'enable' => true,
			],
			'sisal-remnants' => [
				'anchor' => 'Sisal Remnants',
				'url' => '/specialty/sisal-remnant',
				'enable' => true,
			],
			'canvass-binding' => [
				'anchor' => 'Canvass Binding',
				'url' => '/specialty/bindings',
				'enable' => true,
			],
			'request-swatches' => [
				'anchor' => 'Request Swatches',
				'url' => cd_route('request-swatches'),
				'enable' => true,
			],
			'carpet-accessories' => [
				'anchor' => 'Carpet Accessories',
				'url' => '/carpet-accessories',
				'enable' => true,
			],
		],
	],
	'sale' => [
		'anchor' => 'Sale',
		'url' => 'rugs-sale',
		'enable' => false,
		'attributes' => [
			'class' => 'text-red'
		]
	],
	'closeouts' => [
		'anchor' => 'Closeouts',
		'url' => 'clearance_sale',
		'enable' => true,
		'attributes' => [
			'class' => 'text-red'
		]
	],
];
?>
<?php if(!empty($nav)): ?>
	<ul id="menu-nar-header-menu" class="site-menu nav navbar-nav navbar-right">
		<?php foreach ($nav as $id => $n): ?>
			<?php if(!empty($n['enable'])): ?>
				<li id="menu-item-<?php echo $id ?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-<?php echo $id ?>
				<?php echo (!empty($n['child']) ? ' menu-item-has-children dropdown ' : '') ?>
					">
					<a title="<?php echo $n['anchor']; ?>" href="<?php echo $n['url']; ?>"><?php echo $n['anchor']; ?>
						<?php if(!empty($n['child'])): ?>
							<span class="caret"></span>
						<?php endif; ?>
					</a>
					<?php if(!empty($n['child'])): ?>
						<ul role="menu" class=" dropdown-menu">
							<?php foreach ($n['child'] as $cId => $cN): ?>
								<?php if(!empty($cN['enable'])): ?>
									<li id="menu-item-<?php echo $id ?>-<?php echo $cId ?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-<?php echo $id ?>-<?php echo $cId ?>">
										<a title="<?php echo $cN['anchor']; ?>" href="<?php echo $cN['url']; ?>"><?php echo $cN['anchor']; ?></a>
									</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>