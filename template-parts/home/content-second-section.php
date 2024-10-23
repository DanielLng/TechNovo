<?php if( have_rows('main_features_repeater') ): ?>
    <ul class="l-second-section l-flex-row l-gap-c-2 l-margin-x-10">
        <?php while( have_rows('main_features_repeater') ): the_row(); 
            $image = get_sub_field('main_feature_img');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            ?>
            <li class="m-container-one js-container-one l-shadow">
                <?php echo wp_get_attachment_image( $image, $size ); ?>
                <h4><?php echo esc_html( get_sub_field('main_feature_title') ); ?></h4>
                <hr>
                <p><?php echo wp_kses_post ( get_sub_field('main_feature_txt') ); ?></p>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>