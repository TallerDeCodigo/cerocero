<?php  
    get_header(); 

    $args = array('post_type' => 'post','posts_per_page' => 7, 'post_status' => 'publish');

    $posts = new WP_Query($args);

  ?>

    <section>
    <div class="grey">
        <div>
            <img src="<?php echo THEMEPATH; ?>images/404.png">
            <p>no encontramos lo que estás buscando pero esto podría interesarte</p>
        </div>
    </div>
        <div class="wrapper post-container">

        <?php 

            if($posts -> have_posts()) : while($posts -> have_posts()) : 
                $posts -> the_post();
                $fuente = get_post_meta($post->ID, "_fuente_meta", TRUE);
                $url_fuente = get_post_meta($post->ID, "_url_fuente_meta", TRUE);
                $url_fuente = ($url_fuente !== '') ? $url_fuente : "#"; ?>

            <article class="post">
                <div class="post-header">
                    <span>Hace <?php echo human_time_diff( get_the_time('U') ); ?></span>
                <?php
                    if($fuente !== ''){ ?>
                        <span>Fuente: <a href="<?php echo $url_fuente; ?>"><?php echo $fuente; ?></a></span>
                <?php
                    } ?>
                </div>
                <div class="post-content">
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large"); ?></a>
                </div>
                <div class="shares">
                    <textarea><?php the_permalink(); ?></textarea>
                    <a class="copylink"><i class="fa fa-link" aria-hidden="true"></i> Copiar el enlace</a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>','Compartir en Facebook','width=600,height=400')"><i class="fa fa-facebook-square" aria-hidden="true"></i> Compartir en Facebook</a>
                    <a href="https://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>&amp;via=ceroceromx" target="popup" onclick="window.open('https://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>&amp;via=ceroceromx','Compartir en Twitter','width=600,height=400')"><i class="fa fa-twitter" aria-hidden="true"></i> Compartir en Twitter</a>
                    <a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="popup" onclick="window.open('http://www.reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>','Compartir en Reddit','width=600,height=400')"><i class="fa fa-reddit" aria-hidden="true"></i> Compartir en Reddit</a>
                </div>
                <div class="post-footer">
                    <a class="open-share"><i class="material-icons">share</i>Compartir</a>
                    <a href="<?php the_permalink(); ?>" ><i class="material-icons">chat_bubble_outline</i>Comentar</a>
                    <a download="<?php echo $post->slug; ?>" href="<?php echo the_post_thumbnail_url( "full" ); ?>" ><i class="material-icons">file_download</i>Descargar</a>
                </div>
            </article>
            
        <?php endwhile; endif; ?>
        </div>
        <br>
        <br>
    </section>
<?php get_footer(); ?>