<!-- Anything to include in head goes here  -->
</head>
	<body class="<?php perch_page_attribute('bodyClass', array('template' => 'attribute_files/bits.html' )); ?>">
<!-- Cookie Warning -->
<?php perch_content("Cookie Warning"); ?>
	<div class="site-wrapper" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="header main-header homepage-header">
			<!-- Skip to main content link  -->
			<a class="show-on-focus"  href="#main-content">Skip to main content</a>
			<?php perch_content("Main Logo"); ?>
			<?php perch_pages_navigation(array(
			'hide-extensions' => true,
			'levels'    => 1
			)); ?>
			<?php perch_content("Header Content"); ?>
		</header>
