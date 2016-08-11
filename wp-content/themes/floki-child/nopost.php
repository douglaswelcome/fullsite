<?php
/*
Template Name: NoPost
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
<ul class="portgriddw">
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>
	<li>
		<img src="http://localhost/fullsite/wp-content/themes/floki-child/contents/PortfolioGridTest.png" />
	</li>

</ul>









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
