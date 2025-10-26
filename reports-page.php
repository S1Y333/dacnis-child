<?php
/**
 * Template Name: Sector reports Template
 */
?>
<?php get_header(); ?>
<div id="content" >
	
<!--  hero image -->
  <section class="h-full w-full">
  <div class=" bg-cover bg-center-bottom transition-all duration-300 ease-out border-solid border-b-[20px] border-[#5163AC] text-white  flex flex-col justify-end" style="background-image:url('https://workforcepulse.ca/wp-content/uploads/2025/08/hero-image-scaled.jpeg');height:35rem; background-position:bottom;">
    <div class="mb-8 mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl w-full sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full text-left">
      <h1 class="font-black  w-fit">
        <?php _e('Sector Report', 'Dacnis-child');?>
      </h1>
    </div>
  </div>
</section>
	
 <section class="space-y-12 py-12 mb-40">
	
 
	

	<!-- dfilp book   -->
	<div class="my-20 mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl text-left  gap-20" >
		
	
<!-- 	 <h2 class=" mb-3 font-black text-8">Sector Report</h2> -->
   
	<?php echo do_shortcode('[dflip id="132"]'); ?>
	</div>

</section>
</div>
<?php
get_footer();
