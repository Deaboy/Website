<?php $Parsedown = new Parsedown(); ?>
<!-- Home page welcome -->
<article class="welcome front-and-center">
	<header>
		<h1>Vido Gams and Code</h1>
	</header>
	<section>
		<p>a playground for projects and ideas</p>
	</section>
</article>

<hr />

<!-- About me information section -->
<article class="info columnar">
	<?=$Parsedown->text(file_get_contents("content/about_myself.md"))?>
</article>

<!-- About the site information section -->
<article class="info columnar">
	<?=$Parsedown->text(file_get_contents("content/about_this_site.md"))?>
</article>
