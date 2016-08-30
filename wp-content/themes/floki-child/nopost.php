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
	<li >
		<div class="view view-fifth">
		<a href="/berichcampaign/">
		<img src="/wp-content/uploads/2016/08/Be-Rich-Square.png" />
		<div class="mask">
		<h2>Be Rich</h2>
		<p>
			A giving campaign I designed targeted at increasing membership buy in and investment.
		</p>
		</div>
		</a>
		</div>
	</li>
	<li>
		<div class="view view-fifth">
		<a href="/retroprojecto/">
		<img src="/wp-content/uploads/2016/08/RetroGif.gif" />
		<div class="mask">
		<h2>Retro-Projecto</h2>
		<p>
			A retro arcade console utilizing a vintage 16mm film Projecto-Editor.
		</p>
		</div>
		</a>
		</div>
	</li>
	<li>
		<div class="view view-fifth">
		<a href="/collectedgraphicdesign/">
		<img src="/wp-content/uploads/2016/08/coatdrivegrid.png" />
		<div class="mask">
		<h2>The Table Church</h2>
		<p>
			A collection of slides and print images I designed for The Table Church in Washington, DC.
		</p>
		</div>
		</a>
		</div>
	</li>
	<li>
		<div class="view view-fifth">
		<a href="/noel/">
		<img src="/wp-content/uploads/2016/08/noelgrid.png" />
		<div class="mask">
		<h2>Noel: A Winter Gift</h2>
		<p>
			An album I produced with my wife as a gift for family and friends for the Advent/Christmas season of 2011.
		</p>
		</div>
		</a>
		</div>
	</li>
	<li>
		<div class="view view-fifth">
		<a href="/communitygroupcampaign/">
		<img src="/wp-content/uploads/2016/08/CommunityGroup.png" />
		<div class="mask">
		<h2>Community Group 2016</h2>
		<p>
			A marketing campaign I designed and managed to increase involvement in the "Commmunity Group" program.
		</p>
		</div>
		</a>
		</div>
	</li>
	<li>
		<div class="view view-fifth">
		<a href="/thetreering/">
		<img src="/wp-content/uploads/2016/08/portTreeRing-03.png" />
		<div class="mask">
		<h2>The Tree Ring</h2>
		<p>
			A nature-centric band based out of San Diego with which I collaboatred and played upright bass.
		</p>
		</div>
		</a>
		</div>
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
