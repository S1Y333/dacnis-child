<?php
/**
 * Template Name: Contact Template
 */
?>
<?php get_header(); ?>
<div id="content" >
<!--  hero image -->
  <section class="h-full w-full">
  <div class=" bg-cover transition-all duration-300 ease-out border-0 border-solid border-b-[20px] border-[#5163AC] text-white  flex flex-col justify-end" style="background-image:url('https://workforcepulse.ca/wp-content/uploads/2025/08/hero-image-scaled.jpeg');height:35rem; background-position:bottom;">
    <div class="mb-8 mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl w-full sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full text-left">
      <h1 class="font-black  w-fit">
        Contact Us
      </h1>
    </div>
  </div>
</section>
	
 <section class="space-y-12 py-12 mb-40">
	
  <div class="mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl ">
    <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-[5rem]">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/graph-3@2x-scaled.png" 
             alt=" chart" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">Get in Touch</h2>
        <p class="mb-6"> firstname last name
      <br/>
      <span class="font-bold">title</span>
      <br/>
			<span class="font-bold">email@gmail.com</span>
			<br/>
			
		</p>
        
      <a href="/" class=" no-underline rounded-[50px] flex transition-colors w-32 flex items-center bg-[#C3DA63]">
          <p class="pl-4 my-0 " >
            Home
          </p>
			    <img class=" w-5 h-3 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
      </a>
      </div>
    </div>
  </div>
	

	<!-- ninja form   -->
	<div class="my-20 mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl text-left  gap-20" >
		
	<div class="border-gray-300 border-t border-dotted border-[#80808070]"></div>
	 <h2 class=" mb-3 font-black text-8">Newsletter Sign Up </h2>
    <h4 class="mb-4 font-bold text-[#5163AC]">Some copy about staying up to date with the newsletter</h4>
	<?php echo do_shortcode('[ninja_form id=2]'); ?>
	</div>

</section>
</div>
<?php
get_footer();
