<?php 
    $args = array(
        'numberposts' => -1, // Using -1 loads all posts
        'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
        'order'=> 'ASC',
        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
        'post_status' => null,
        'exclude'     => get_post_thumbnail_id(),
        'post_type' => 'attachment'
    );
    
    $images = get_children( $args );
if( $images ){ ?>
    <div id="image-gallery">
        <?php foreach($images as $image){ ?>
        <a href="<?php echo $image->guid; ?>" style="background-image: url('<?php echo $image->guid; ?>');"class="gallery-image slide" data-lightbox="<?php echo the_title(); ?>" >
        </a>
        <?php } ?>
    </div>
    <div class="gallery-nav">
        <a class="arrow-prev"><img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-prev.png"></a>
        <ul class="slider-thumbs">
            <?php foreach($images as $image){ ?>
                <li class="thumb">
                    <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
                </li>
            <?php } ?>
        </ul>
        <a  class="arrow-next"><img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-next.png"></a>
    </div>

<?php } ?>