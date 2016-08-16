<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<?php
$style="";

global $tipopage,$layerslider,$revslider,$pageslider,$floki_custom_sidebar,$blogcategory,$spinfo,$sptitle,$spimage,$sporder,$spcontent,$sporde,$visiblezone,$bimage,$bimage2,$bimage3,$bimage4,$bcolor1,$bcolor2,$spcont,$backdot,$youtubeback;

// options page
$content_css = '';
$sidebar_css = '';
$mainclass="";

$tipopage=floki_get_option( 'default_sidebar_pos3' );
$tipopagemain=$tipopage;
if($tipopage=="" || ($tipopage != 'left' && $tipopage != 'right')) $tipopage="full";

if($tipopage == 'left') {
		$content_css = 'fourteen columns sl';
$mainclass="grid2";
	}
	if($tipopage == 'right') {
		$content_css = 'fourteen columns sr';
$mainclass="grid2";
	}

//echo floki_get_breadcrumbfloki(); ?>

<section>
 <?php

  $cssextra="";

 if($tipopage=="left" || $tipopage == 'right') {

  $cssextra="padding-top:0;";

 ?>


<div class="container" style=" <?php  if($menu_design6=="sm-clean" || $menu_design6=="bimage") {

	echo 'width:100%;';
if($tipopage == 'left') {
		$content_css = 'fourteen columns sl';
$mainclass="";
	}
	if($tipopage == 'right') {
		$content_css = 'fourteen columns sr';
$mainclass="";
	}
}
	 ?>" >


<?php }

else {

	$style="";

}
?>

<?php if($tipopage=="left") { ?>

		<div class="four columns sidebarleft">

<?php if($floki_custom_sidebar=="" || $floki_custom_sidebar=="default") get_sidebar(); else  get_sidebar($floki_custom_sidebar); ?>

		</div>

	<?php } ?>
	<!-- page content here-->
<div class="aboutdw">
	<img src="/wp-content/uploads/2016/08/headshot.jpg" /></img>

My name is Douglas Dale Welcome. I <strong>make things</strong> and <strong>build people</strong>.

As a creative <strong>maker</strong> with a background in music, I create and design compelling visual and audio work that shapes a <strong>holistic experience</strong> and aesthetic for an audience. As a <strong>people-builder</strong>, I approach project management through <strong>talent development</strong> and <strong>collaboration</strong> with artists, designers, and engineers.

I always begin with asking why? Because I think you should believe in your work. Believe in:
<p style="text-align: center;"><i>what</i> you <strong>cultivate</strong>,
<i>how</i> you <strong>curate</strong>,
and <i>who</i> you <strong>collaborate</strong> with.</p>
<p style="text-align: left;">Here's what that means for me:</p>
<strong>Cultivate</strong>: Make something that causes the world around you to flourish.
<strong>Curate</strong>: Design an experience that captivates, motivates, and enlightens those who encounter it.
<strong>Collaborate</strong>: Harness your teammates' potential and gather together to create something bigger than yourself.

</div>









	<!-- page content end here-->
<div class="<?php echo $content_css; ?>">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php endwhile; else: ?>

	<?php endif; ?>
</div>

<?php if($tipopage=="right") { ?>

		<div class="four columns sidebarright">


<?php

if($floki_custom_sidebar=="" || $floki_custom_sidebar=="default") get_sidebar();

else  get_sidebar("custom");

?>



		</div>

	<?php } ?>

 <?php if($tipopage=="left" || $tipopage == 'right') { ?>

</div>

<?php } ?>


                   <?php if(is_single($post)) {

				next_post_link('<div style="float:right" class="pagination"> %link </div>');

				previous_post_link('<div style="float:left" class="pagination"> %link </div>');


			}
				?>


</section>


<?php get_footer(); ?>
