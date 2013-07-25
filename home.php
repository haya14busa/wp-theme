<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Blog Template
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); 

global $more; $more = 0; 
?>

<div id="content-blog" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">
      
	<?php if (have_posts()) : ?>
        
        <?php get_template_part( 'loop-header' ); ?>
                    
<div id="pinterest-wrap">
        <?php while (have_posts()) : the_post(); $loopcounter++;?>
        
<!--
<div class="grid col-300 <?php if($loopcounter%3==0) {echo ('fit');}?>">
-->
<div class="grid">
			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>

                <?php get_template_part( 'post-meta' ); ?>
                
                <div class="post-entry">
                    <?php if ( has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
                        </a>
                    <?php endif; ?>


<?php echo mb_substr(strip_tags($post-> post_content), 0, 200); ?>
<!--
<#?php echo mb_substr(get_the_excerpt(), 0, 140); ?>
<#?php echo mb_substr($post-> post_content, 0, 150); ?>
<#?php echo mb_substr(strip_tags($post-> post_content), 0, 200); ?>
<#?php echo mb_substr(get_the_excerpt(), 0, 80); ?>
                    <#?php the_excerpt(); ?>
-->
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
                
                <?php get_template_part( 'post-data' ); ?>
				               
				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-<?php the_ID(); ?> -->       
			<?php responsive_entry_after(); ?>
</div><!-- end of grid col-300 -->
        <?php 
		endwhile; 
echo ('</div><!-- end of pinterest-wrap -->');
		get_template_part( 'loop-nav' ); 

	else : 

echo ('</div><!-- end of pinterest-wrap -->');
		get_template_part( 'loop-no-posts' ); 

	endif; 
	?>  

</div><!-- end of #content-blog -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
