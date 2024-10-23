<section class="m-section-social-networks">
    <?php if( have_rows('social_network_repeater', 'option') ): ?>
        <ul class="m-section-social-networks__items">
            <?php while( have_rows('social_network_repeater', 'option') ): the_row(); 
                ?>
                <li>
                    <a href="<?php echo esc_attr( get_sub_field('social_network_link') ); ?>" style="background-image: url(<?php echo esc_url( get_sub_field('social_network_img') ); ?>)"></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <div class="m-section-social-networks__page-name">
        <p>// <?php echo get_the_title() ?> - TechNovo //</p>
    </div>
</section>
<section class="m-section-whatsapp">
    <a href="<?php echo esc_attr( get_field('whatsapp_link', 'option') ); ?>" style="background-image: url(<?php echo esc_url( get_field('whatsapp_img', 'option') ); ?>)"></a>
</section>