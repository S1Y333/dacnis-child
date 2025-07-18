<?php
/**
 * Template Name: Home Template
 */
?>
<?php get_header(); ?>
<div id="content" class="my-[5rem] lg:my-[10rem]">
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl text-left">
	<h2 class="text-2xl font-bold mb-3">INTRO-Mauris lobortis accumsan ante et.</h2>
	<h3 class="mb-4">Duis hendrerit neque orci, quis porttitor quam fringilla a. Fusce faucibus, sem varius volutpat dictum, odio tellus feugiat enim, vel.</h3>
	<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci. Etiam volutpat, neque varius hendrerit euismod, nibh felis lobortis orci, vitae gravida nisl dolor ac risus. Praesent sollicitudin quis libero in hendrerit. Fusce euismod sapien metus, at lacinia nulla fermentum tincidunt. Nullam sollicitudin, nunc eget ornare venenatis, lacus leo auctor ipsum, a dignissim mauris tellus quis odio. Etiam ac libero fringilla.</p>
   </div>
   <!-- image and intro section, image on the left and intro on the right with a button to jump to other pages -->
	<section class="space-y-12 py-12">
  <!-- About Us -->
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl">
    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-[5rem]">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/06/engineers.png" 
             alt="Two engineers" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-2/3">
        <h2 class="text-2xl font-bold mb-4">Welcome to Our Website</h2>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="/about-us" class="inline-block bg-black text-white px-6 py-3 hover:bg-stone-700 transition-colors">
          About Us →
        </a>
      </div>
    </div>
  </div>

  <!-- Partners (Reversed) -->
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl">
    <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-[5rem]">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/06/engineers.png" 
             alt="Partners" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">Our Partners</h2>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="/partners" class="inline-block bg-black text-white px-6 py-3 hover:bg-stone-700 transition-colors">
          Partners →
        </a>
      </div>
    </div>
  </div>

  <!-- Contact Us -->
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl">
    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-[5rem]">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/06/engineers.png" 
             alt="Contact us" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="/contact-us" class="inline-block bg-black text-white px-6 py-3 hover:bg-stone-700 transition-colors">
          Contact Us →
        </a>
      </div>
    </div>
  </div>
</section>
</div>
<?php
get_footer();
