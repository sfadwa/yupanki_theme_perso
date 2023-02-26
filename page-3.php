<?php get_header(); ?> 
<h1 class="page_title"><?= the_title(); ?></h1>

<div class="the_content">

	<h1>Titre de niveau 1</h1>

	<h2>Titre de niveau 2</h2>

	<h3>Titre de nivrau 3</h3>

	<h4>Titre de niveau 4</h4>

	<h5>Titre de niveau 5</h5>

	<h6>Titre de niveau 6</h6>

	<h2>Fusce a quam. Donec mollis hendrerit risus. Nam commodo suscipit quam. Maecenas nec odio et ante tincidunt
		tempus. Praesent egestas tristique nibh.</h2>

	<p>Fusce a quam. Donec mollis hendrerit risus. Nam commodo suscipit quam. Maecenas nec odio et ante tincidunt
		tempus. Praesent egestas tristique nibh.</p>

	<ul>
		<li>Fusce a quam. Donec mollis hendrerit risus.</li>
		<li>Nam commodo suscipit quam.</li>
		<li>Maecenas nec odio et ante tincidunt tempus. Praesent egestas tristique nibh.</li>
	</ul>

	<ol>
		<li>Fusce a quam. Donec mollis hendrerit risus.</li>
		<li>Nam commodo suscipit quam.</li>
		<li>Maecenas nec odio et ante tincidunt tempus. Praesent egestas tristique nibh</li>
	</ol>

	<div class="wp-container-2 wp-block-group has-cyan-bluish-gray-background-color has-background">
		<div class="wp-block-group__inner-container">
			<div class="wp-container-1 wp-block-buttons">
				<div class="wp-block-button"><a class="wp-block-button__link">primary</a></div>
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">outline</a></div>
			</div>
		</div>
	</div>

	<blockquote class="wp-block-quote">
		<p>Bloc citation – Lorem ipsum dolor sit amet</p><cite>Une source</cite>
	</blockquote>

	<pre class="wp-block-code"><code>Bloc code</code></pre>

	<pre class="wp-block-preformatted">Bloc préformaté</pre>

	<figure class="wp-block-pullquote">
		<blockquote>
			<p>Bloc citation en exergue</p><cite>Une source</cite>
		</blockquote>
	</figure>

	<figure class="wp-block-table">
		<table class="has-fixed-layout">
			<thead>
				<tr>
					<th>Tableau Lorem 1</th>
					<th>Tableau lorem 2</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Valeur 1</td>
					<td>Valeur 2</td>
				</tr>
				<tr>
					<td>Valeur 3</td>
					<td>Valeur 4</td>
				</tr>
			</tbody>
		</table>
		<figcaption>Une légende</figcaption>
	</figure>

	<pre class="wp-block-verse">Bloc couplet</pre>

	<figure class="wp-block-image size-large"><img src="https://picsum.photos/1600/800" alt="">
		<figcaption>Une légende</figcaption>
	</figure>

	<figure class="wp-block-gallery has-nested-images columns-default is-cropped">
		<figure class="wp-block-image size-large"><img loading="lazy" data-id="19"
				src="https://picsum.photos/1600/800"></figure>

		<figure class="wp-block-image size-large"><img loading="lazy" data-id="20"
				src="https://picsum.photos/1600/800"></figure>

		<figure class="wp-block-image size-large"><img loading="lazy" data-id="21"
				src="https://picsum.photos/1600/800"></figure>

		<figure class="wp-block-image size-large"><img loading="lazy" data-id="22"
				src="https://picsum.photos/1600/800"></figure>

		<figure class="wp-block-image size-large"><img loading="lazy" data-id="22"
				src="https://picsum.photos/1600/800"></figure>

		<figure class="wp-block-image size-large"><img loading="lazy" data-id="22"
				src="https://picsum.photos/1600/800"></figure>
	</figure>

	<figure class="wp-block-audio"><audio controls=""
			src="https://soundcloud.com/dj-toilettiquette/bensound-the-elevator-bossa-nova?utm_source=clipboard&amp;utm_medium=text&amp;utm_campaign=social_sharing"></audio>
	</figure>

	<div class="wp-block-cover alignfull"><span aria-hidden="true"
			class="has-black-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<h2 class="has-text-align-center">Un titre de bannière</h2>
			<p class="has-text-align-center">Un texte</p>
		</div>
	</div>

	<div class="wp-block-file"><a id="wp-block-file--media-6fc0216b-4375-46cf-a04e-747f342fd18a"
			href="https://bff.lndo.site/app/uploads/2022/05/fulltext01.pdf">fulltext01</a><a
			href="https://bff.lndo.site/app/uploads/2022/05/fulltext01.pdf" class="wp-block-file__button" download=""
			aria-describedby="wp-block-file--media-6fc0216b-4375-46cf-a04e-747f342fd18a">Télécharger</a></div>

	<div class="wp-block-media-text is-stacked-on-mobile">
		<figure class="wp-block-media-text__media"><img loading="lazy"
				src="https://picsum.photos/1600/800" alt="" class="wp-image-22 size-full"></figure>
		<div class="wp-block-media-text__content">
			<h2>Media et texte : titre</h2>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
	</div>

	<div class="wp-block-columns">
		<div class="wp-block-column">
			<h2>Colonne 1</h2>
			<p>Lorem ipsum dolor sit amet</p>
		</div>

		<div class="wp-block-column">
			<h2>Colonne 2</h2>
			<p>Lorem ipsum dolor sit amet</p>
		</div>

		<div class="wp-block-column">
			<h2>Colonne 3</h2>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
	</div>

	<div class="wp-container-3 wp-block-group has-black-background-color has-background">
		<div class="wp-block-group__inner-container">
			<h2 class="has-white-color has-text-color">Groupe</h2>
		</div>
	</div>
</div>

<?php
$slug = basename(get_permalink());

// EXEMPLE INCLUDE EN FONCTION SLUG
/* if ( $slug === 'agenda' ) {
    get_template_part( 'template-parts/agenda' );
} */
?>

<?php get_footer(); ?>

