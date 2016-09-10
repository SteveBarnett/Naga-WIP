<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		?></title>

	<?php wp_head(); ?>
	<script>
	(function(d) {
		var config = {
			kitId: 'gmm5agt',
			scriptTimeout: 3000,
			async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
</script>
</head>

<body>

	<nav id="main-menu" role="navigation">
		<h1><a href="https://naga.co.za/" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Naga" /></a></h1>
		<h2 class="visuallyhidden">Main Navigation</h2>
		<ul>
			<li><a href="http://naga.co.za">Home</a></li>
			<li><a href="https://naga.co.za/about/">About</a></li>
			<li ><a href="https://naga.co.za/community/">Community</a></li>
		</ul>
	</nav>
