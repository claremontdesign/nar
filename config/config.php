<?php

return [
	'page' => [
		'title' => [
			'prefix' => '',
			'suffix' => ''
		],
	],
	'back' => [
		'enable' => false,
	],
	'front' => [
		'design' => [
			'template' => 'default',
		]
	],
	'site' => [
		'title' => 'Natural Area Rugs'
	],
	'dates' => [
		'formats' => [
			'display' => [
				'datetime' => 'M d, Y h:i A',
				'date' => 'M d, Y'
			],
		],
	],
	'contact' => [
		'support' => [
			'name' => 'NaturalAreaRugs',
			'email' => env('contactSupportEmail', 'support@naturalarearugs.com')
		]
	],
	'nar' => [
		'yahoo' => [
			'form' => [
				'addtocart' => 'http://order.store.yahoo.net/cgi-bin/wg-order?naturalarearugs',
				'vwcatalog' => 'naturalarearugs'
			],
		],
		'customrugs' => [
			'selectionType' => false,
			'rugpad' => false,
			'floor' => true,
			'floors' => [
				'beech' => [
					'enable' => true,
					'name' => 'Beech'
				],
				'blackwood' => [
					'enable' => true,
					'name' => 'Blackwood'
				],
				'concrete' => [
					'enable' => true,
					'name' => 'Concrete'
				],
				'goldenoak' => [
					'enable' => true,
					'name' => 'Golden Oak'
				],
				'mahogany' => [
					'enable' => true,
					'name' => 'Mahogany'
				],
				'weatheredplanks' => [
					'enable' => true,
					'name' => 'Weathered Planks'
				],
			],
		],
	],
	'routes' => [
		'request-swatches' => [
			'viewpage' => cd_nar_view_name('swatches.index'),
			'url' => '/request-swatches',
			'enable' => true
		],
		'about-us' => [
			'viewpage' => cd_nar_view_name('page.about'),
			'enable' => true,
		],
		'customer-assistance' => [
			'viewpage' => cd_nar_view_name('page.customerAssistance'),
			'enable' => true
		],
		'testimonials' => [
			'viewpage' => cd_nar_view_name('page.testimonials'),
			'enable' => true
		],
		'image-gallery' => [
			'viewpage' => cd_nar_view_name('page.imageGallery'),
			'enable' => true
		],
		'faq' => [
			'viewpage' => cd_nar_view_name('page.faq'),
			'enable' => true
		],
		'affiliate-program' => [
			'viewpage' => cd_nar_view_name('page.affiliateProgram'),
			'enable' => true
		],
		'events-promotions' => [
			'viewpage' => cd_nar_view_name('page.eventsPromotions'),
			'enable' => true
		],
		'info' => [
			'viewpage' => cd_nar_view_name('page.info'),
			'enable' => true
		],
		'why-buy' => [
			'viewpage' => cd_nar_view_name('page.whybuy'),
			'enable' => true
		],
		'blog' => [
			'viewpage' => cd_nar_view_name('page.blog'),
			'enable' => true
		],
		'sitemap' => [
			'viewpage' => cd_nar_view_name('page.sitemap'),
			'enable' => true
		],
		'legal-notice' => [
			'viewpage' => cd_nar_view_name('page.legalNotice'),
			'enable' => true
		],
		'rugs-101' => [
			'viewpage' => cd_nar_view_name('page.articles'),
			'enable' => true
		],
		'rug-care' => [
			'viewpage' => cd_nar_view_name('page.rugCare'),
			'enable' => true
		],
		'earth-friendly' => [
			'viewpage' => cd_nar_view_name('page.earthFriendlyAreaRugs'),
			'enable' => true
		],
		'privacy-policy' => [
			'viewpage' => cd_nar_view_name('page.privacyPolicy'),
			'enable' => true
		],
		'shipping-and-delivery' => [
			'viewpage' => cd_nar_view_name('page.shippingAndDelivery'),
			'enable' => true
		],
		'international-shipping' => [
			'viewpage' => cd_nar_view_name('page.internationalShipping'),
			'enable' => true
		],
		'return-policy' => [
			'viewpage' => cd_nar_view_name('page.returnPolicy'),
			'enable' => true
		],
		'new-arrivals' => [
			'controller' => 'category',
			'method' => 'newArrivals',
			'url' => 'new-arrivals',
			'enable' => true
		],
		'search' => [
			'controller' => 'category',
			'method' => 'search',
			'url' => 'search',
			'enable' => true
		],
	],
	'controllers' => [
		'page' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\PageController',
			'enable' => true
		],
		'home' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\IndexController',
			'enable' => true
		],
		'sitemap' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\SitemapController',
			'enable' => true
		],
		'product' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\ProductController',
			'enable' => true
		],
		'category' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\CategoryController',
			'enable' => true
		],
		'productImages' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\ImageController',
			'enable' => true
		],
		'customRugs' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\CustomrugsController',
			'enable' => true
		],
		'subscribe' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\EmailsubscriberController',
			'enable' => true
		],
		'rugFinder' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\RugfinderController',
			'enable' => true
		],
		'contact' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\ContactController',
			'enable' => true
		],
		'invite' => [
			'class' => 'Claremontdesign\Nar\Http\Controllers\InviteController',
			'enable' => true
		],
	],
	'database' => [
		'tables' => [
			'coupons' => [
				/**
				 * Email couponCode
				 */
				'email' => true,
				/**
				 * Email couponCode for Today settings
				 */
				'today' => true,
			],
		]
	],
];
