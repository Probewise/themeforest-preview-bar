<?php

/**
 * Constants / config
 */
define( 'BASE_DOMAIN' , 'http://www.proteusthemes.com/' );
define( 'BASE_URL' , BASE_DOMAIN . 'themes/' );
define( 'ENVATO_USERNAME' , 'ProteusThemes' ); // for the refferal link



/**
 * Redirect, need to be done using JS
 */
$js = NULL;

if( ! empty( $_SERVER['HTTP_REFERER'] ) ) {
	if( FALSE !== strstr( $_SERVER['HTTP_REFERER'], 'themeforest.net' ) ) {
		$js = 'window.top.location.href = "' . BASE_URL . '?theme=' . $_GET['theme'] . '";';
	}
}


/**
 * Array of our themes
 */
$items = array(
	'hairpress' => array(
		// title which will be shown in the browser
		'title'       => 'Hairpress - HTML Template for Hair Salons Preview - by ' . ENVATO_USERNAME,
		// short title is used in the drop-down menu
		'title_short' => 'Hairpress HTML',
		// URL to demo site
		'demo_url'    => 'http://www.proteusthemes.com/themes/hairpress/',
		// needs any explanation? URL to your item in ThemeForest
		'url'         => 'http://themeforest.net/item/hairpress-html-template-for-hair-salons/3803346',
		// Price of the item
		'price'       => '$17',
	),
	'hairpress-wp' => array(
		'title'       => 'Hairpress - Wordpress Theme for Hair Salons Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Hairpress WP',
		'demo_url'    => 'http://demo.proteusthemes.com/hairpress/',
		'url'         => 'http://themeforest.net/item/hairpress-wordpress-theme-for-hair-salons/4099496',
		'price'       => '$58',
		'analytics'   => array(
			'tracking_id'   => 'UA-33538073-4',
			'allowed_domains' => array(
				'demo.proteusthemes.com'
			),
		),
	),
	'webmarket-html' => array(
		'title'       => 'Webmarket - HTML Template for Online Shop Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Webmarket HTML',
		'demo_url'    => 'http://www.proteusthemes.com/themes/webmarket-html/',
		'url'         => 'http://themeforest.net/item/webmarket-html-template-for-online-shop/5409539',
		'price'       => '$16',
	),
	'webmarket-wp' => array(
		'title'       => 'Webmarket - WP WooCommerce Theme for Online Shop Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Webmarket WP + Woo',
		'demo_url'    => 'http://demo.proteusthemes.com/webmarket/',
		'url'         => 'http://themeforest.net/item/webmarket-wp-woocommerce-theme-for-online-shop/6437728',
		'price'       => '$58',
	),
	'organique-html' => array(
		'title'       => 'Organique - HTML Template For Healthy Food Store Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Organique HTML',
		'demo_url'    => 'http://www.proteusthemes.com/themes/organique-html/',
		'url'         => 'http://themeforest.net/item/organique-html-template-for-healthy-food-store/6779086',
		'price'       => '$17',
	),
	'organique-wp' => array(
		'title'       => 'Organique - WordPress Theme For Healthy Food Shop Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Organique WP + Woo',
		'demo_url'    => 'http://demo.proteusthemes.com/organique/',
		'url'         => 'http://themeforest.net/item/organique-wordpress-theme-for-healthy-food-shop/7312458',
		'price'       => '$58',
	),
	'carpress-wp' => array(
		'title'       => 'Carpress - WordPress Theme For Mechanic Workshops Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Carpress WP',
		'demo_url'    => 'http://demo.proteusthemes.com/carpress/',
		'url'         => 'http://themeforest.net/item/carpress-wordpress-theme-for-mechanic-workshops/7042577',
		'price'       => '$58',
		'analytics'   => array(
			'tracking_id'   => 'UA-33538073-10',
			'allowed_domains' => array(
				'demo.proteusthemes.com'
			),
		),
	),
	'readable-html' => array(
		'title'       => 'Readable - HTML Template For Blog Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Readable HTML',
		'demo_url'    => 'http://www.proteusthemes.com/themes/readable-html/',
		'url'         => 'http://themeforest.net/item/readable-blog-template-focused-on-readability/7499064',
		'price'       => '$16',
	),
	'readable-wp' => array(
		'title'       => 'Readable - WordPress Theme Focused on Readability Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Readable WP',
		'demo_url'    => 'http://demo.proteusthemes.com/readable/',
		'url'         => 'http://themeforest.net/item/readable-wordpress-theme-focused-on-readability/7712790',
		'price'       => '$43',
	),
	'restaurant-wp' => array(
		'title'       => 'Dining Restaurant - WordPress Theme For Chefs - by ' . ENVATO_USERNAME,
		'title_short' => 'Dining Restaurant WP',
		'demo_url'    => 'http://demo.proteusthemes.com/restaurant/',
		'url'         => 'http://themeforest.net/item/dining-restaurant-wordpress-theme-for-chefs/8294419',
		'price'       => '$58',
		'analytics'   => array(
			'tracking_id'   => 'UA-33538073-11',
			'allowed_domains' => array(
				'demo.proteusthemes.com'
			),
		),
	),
	'buildpress-wp' => array(
		'title'       => 'BuildPress - WP Theme For Construction Business - by ' . ENVATO_USERNAME,
		'title_short' => 'BuildPress WP',
		'demo_url'    => 'http://demo.proteusthemes.com/buildpress/',
		'url'         => 'http://themeforest.net/item/buildpress-wp-theme-for-construction-business/9323981',
		'price'       => '$58',
		'analytics'   => array(
			'tracking_id'   => 'UA-33538073-13',
			'allowed_domains' => array(
				'demo.proteusthemes.com'
			),
		),
	),
);
$items = array_reverse( $items );

/**
 * Check for current item
 */
if( key_exists( @$_GET['theme'], $items ) ) {
	$item  = $items[$_GET['theme']];

} else {
	$item = array(
		'title'       => 'Theme Preview - by ' . ENVATO_USERNAME,
		'title_short' => 'Theme Preview',
		'url'         => 'http://themeforest.net/user/' . ENVATO_USERNAME . '/portfolio',
		'demo_url'    => 'http://themeforest.net/user/' . ENVATO_USERNAME . '/portfolio',
		'price'       => '',
	);
}

/**
 * Function which returns the url to the theme
 */
function site_url( $uri = "" ) {
	return BASE_URL . $uri;
}

/**
 * Helper to determine if we should load the analytics script
 * @param  array  $item
 * @return boolean
 */
function has_analytics( $item ) {
	return key_exists( 'analytics', $item );
}


?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<title><?php echo $item['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Demo theme preview">
	<meta name="author" content="ProteusNet d.o.o.">

	<?php if( NULL !== $js ) : ?>
	<script type="text/javascript">
		<?php echo $js; ?>
	</script>
	<?php endif; ?>

	<!--  = CSS stylesheets =  -->
	<link rel="stylesheet" href="preview-bar/stylesheets/style.css" type="text/css" media="all" />

	<!-- Fav icon -->
	<link rel="shortcut icon" href="http://www.proteusthemes.com/favicon.ico">

	<script type="text/javascript">
		var calcHeight = function() {
			var previewBar = document.getElementById( 'custom-preview-bar' ),
				previewFrame = document.getElementById( 'main-preview-frame' );

			if ( previewFrame && previewBar) {
				previewFrame.style.height = ( window.innerHeight - previewBar.offsetHeight ) + 'px';
			}
		};
		document.addEventListener( 'DOMContentLoaded', calcHeight );
		window.addEventListener( 'resize', calcHeight );
	</script>

	</head>

	<body>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('require', 'linker');

			// property for the preview bar
			ga('create', 'UA-33538073-12', 'auto');
			ga('send', 'pageview');

		<?php if ( has_analytics( $item ) ) : ?>
			// property for the item being shown
			ga('create', '<?php echo $item['analytics']['tracking_id']; ?>', 'auto', {'allowLinker': true, 'name': 'itemShown'});
			ga('linker:autoLink', ['<?php echo implode( "', '", $item['analytics']['allowed_domains'] ); ?>'] );
			ga('itemShown.send', 'pageview');
		<?php endif; ?>
		</script>

		<div class="preview-bar">
			<!-- Envato Logo -->
			<div class="preview-bar__logo" href="#">
				<a href="#">Envato Market</a>
			</div>
			<!-- Select Theme -->
			<div class="preview-bar__select-theme">
				<?php echo $item['title_short']; ?>
				<ul class="preview-bar__select-theme__all-themes">
					<?php foreach($items as $slug => $single_item) : ?>
					<li><a href="<?php echo site_url('?theme=' . $slug); ?>"><?php echo $single_item['title_short']; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<!-- Made by ProteusThemes -->
			<span class="preview-bar__proteusthemes">made by <a href="http://www.proteusthemes.com/" target="_blank">ProteusThemes</a></span>
			<!-- Close Frame -->
			<a class="preview-bar__remove-frame" href="<?php echo $item['demo_url']; ?>" title="Close This Frame">
				<img class="preview-bar__remove-frame__x" src="preview-bar/images/x.png"> <span class="preview-bar__remove-frame__text">Remove Frame</span>
			</a>
			<!-- Buy Now Button -->
			<a class="preview-bar__purchase-button" href="<?php echo $item['url']; ?>?ref=<?php echo ENVATO_USERNAME; ?>">Buy now</a>
		</div>

	<?php if ( has_analytics( $item ) ): ?>
		<div id="iframe-holder"></div>
		<script>
			/**
			 * Dynamically create the iframe with the proper linker for analytics
			 */
			var linker;

			function addiFrame( divId, url, opt_hash ) {
				return function( tracker ) {
					window.linker = window.linker || new window.gaplugins.Linker( tracker );
					var iFrame    = document.createElement( 'iFrame' );
					iFrame.src    = window.linker.decorate( url, opt_hash );
					iFrame.id     = 'main-preview-frame';
					iFrame.setAttribute( 'frameborder', '0' );
					document.getElementById( divId ).appendChild( iFrame );
					calcHeight();
				};
			}

			// Dynamically add the iFrame to the page with proper linker parameters.
			ga( addiFrame( 'iframe-holder', '<?php echo $item['demo_url']; ?>' ) );
		</script>
	<?php else : ?>
		<iframe src="<?php echo $item['demo_url']; ?>" frameborder="0" id="main-preview-frame"></iframe>
	<?php endif; ?>

	<!-- custom, not so important JS at the end -->
	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script>
		$( function() {
			/**
			 * Constructor
			 * @return {[type]} [description]
			 */
			var utmDecorator = function () {
				this.autosetParameters();
				this.stringifyObj( this.parametersObj );
			};

			$.extend( utmDecorator.prototype, {
				// from: https://support.google.com/analytics/answer/1033867?hl=en
				utmParams: [ 'utm_source', 'utm_medium', 'utm_term', 'utm_content', 'utm_campaign' ],

				parametersObj: {},

				urlAppend: '',

				/**
				 * Helper function for getting parameter by name
				 * @see  http://stackoverflow.com/a/901144
				 * @param  {string} name
				 * @return {string}
				 */
				getParameterByName: function (name) {
					name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
					var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
					results = regex.exec(location.search);
					return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
				},

				/**
				 * Pass the DOM element and it will output the decorated link
				 * @param  {DOM} el
				 */
				decorate: function ( el ) {
					var $el = $( el );

					var prepend = $el[0].search.length > 0 ? '&' : '?';

					if ( this.urlAppend ) {
						$el.attr( 'href', $el.attr( 'href' ) + prepend + this.urlAppend );
					}

					return this;
				},

				/**
				 * Set parameters, based on the existing page
				 * @return this
				 */
				autosetParameters: function () {
					// reset
					this.parametersObj = {};

					// check every
					$.each( this.utmParams, $.proxy( function ( index, utmParam ) {
						var utmParamVal = this.getParameterByName( utmParam );
						if ( utmParamVal ) {
							this.parametersObj[ utmParam ] = utmParamVal;
						}
					}, this ) );

					return this;
				},

				/**
				 * Build the HTTP GET query
				 * @param  {object} obj
				 * @return this
				 */
				stringifyObj: function ( obj ) {
					var urlAppend = [];
					$.each( obj, $.proxy( function ( key, val ) {
						urlAppend.push( key + '=' + val );
					}, this ) );

					this.urlAppend = urlAppend.join( '&' );

					return this;
				}
			} );

			// decorate all links to themeforest and to our demo page on page load
			var decorator = new utmDecorator;
			$( 'a[href*="themeforest.net"], a[href*="proteusthemes.com"]' ).each( function ( index, $el ) {
				decorator.decorate( $el );
			} );
		} );
	</script>
	</body>
</html>