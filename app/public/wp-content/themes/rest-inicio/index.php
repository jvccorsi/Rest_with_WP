<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<div class="grid-8">
				<img src="img/rest-fachada.jpg" alt="Fachada do Rest">
			</div>
			<div class="grid-8">
                <?php the_content(); ?>
			</div>
		</section>
    <?php endwhile; else: ?>
    <p>Nao existe post</p>
    <?php endif; ?>


<?php get_footer(); ?>