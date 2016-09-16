<footer role="contentinfo" id="footer">
	<?php
	$most_recent_post_obj = wp_get_recent_posts( array( 'numberposts' => '1'));
	$most_recent_post = '<li><a href="' . get_permalink($most_recent_post_obj[0]["ID"]) . '">' .   $most_recent_post_obj[0]["post_title"].'</a><br />(most recent post)</li> ';
	wp_reset_query();
	?>
	<ul>
		<li><h3>Writing</h3></li>
		<?php echo $most_recent_post; ?>
		<li><a href="http://naga.co.za/how-i-do-things/">How I do things</a></li>
		<li><a href="http://naga.co.za/2015/08/19/my-preferred-front-end-development-process/">FED process</a></li>
		<li><a href="https://naga.co.za/2016/08/22/user-centered-design-process-again/">UCD process</a></li>
		<li><a href="https://naga.co.za/sketchnotes/">Sketchnotes</a></li>
	</ul>

	<ul>
		<li><h3>Elsewhere</h3></li>
		<li><a href="http://twitter.com/maxbarners" rel="me">Twitter</a></li>
		<li><a href="http://github.com/SteveBarnett/" rel="me">GitHub</a></li>
		<li><a href="https://za.linkedin.com/in/steve-barnett-2a924a4a" rel="me">LinkedIn</a></li>
	</ul>

	<ul>
		<li><h3>Contact</h3></li>
		<li><a href="&#x6d;&#x61;&#x69;&#x6c;&#x74;&#x6f;&#x3a;&#x68;&#x65;&#x6c;&#x6c;&#x6f;&#x40;&#x6e;&#x61;&#x67;&#x61;&#x2e;&#x63;&#x6f;&#x2e;&#x7a;&#x61;">&#x68;&#x65;&#x6c;&#x6c;&#x6f;&#x40;&#x6e;&#x61;&#x67;&#x61;&#x2e;&#x63;&#x6f;&#x2e;&#x7a;&#x61;</a></li>
		<li>078 111 2163</li>
	</ul>


</footer>

<?php wp_footer(); ?>
</body>
</html>
