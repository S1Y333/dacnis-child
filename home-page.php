<?php
/**
 * Template Name: Home Template
 */
?>
<?php get_header(); ?>
<div id="content" class="mb-[10rem]">
  <div class="container mx-auto px-4 max-w-6xl text-left">
	<h2 class="text-2xl font-bold mb-3">Title here</h2>
	<h3 class="mb-4">Duis hendrerit neque orci, quis porttitor quam fringilla a. Fusce faucibus, sem varius volutpat dictum, odio tellus feugiat enim, vel.</h3>
	<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci. Etiam volutpat, neque varius hendrerit euismod, nibh felis lobortis orci, vitae gravida nisl dolor ac risus. Praesent sollicitudin quis libero in hendrerit. Fusce euismod sapien metus, at lacinia nulla fermentum tincidunt. Nullam sollicitudin, nunc eget ornare venenatis, lacus leo auctor ipsum, a dignissim mauris tellus quis odio. Etiam ac libero fringilla.</p>
   </div>
   <!-- image and intro section, image on the left and intro on the right with a button to jump to other pages -->
	<section>
		<!-- about us -->
		<div class="container mx-auto px-4 max-w-6xl flex flex-col md:flex-row items-center md:gap-x-12 h-64">
			<div class="md:w-1/3 mb-6 md:mb-0 ">
				<img src="https://workforcepulse.ca/wp-content/uploads/2025/06/engineers.png" alt="two engineers" class="w-full h-auto rounded-lg">
			</div>
			<div class="md:w-2/3">
				<div class="px-6">
					<h2 class="text-2xl font-bold mb-3">Welcome to Our Website</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="mt-8">
						<a href="<?php echo site_url('/about-us'); ?>" class="bg-black text-white px-6 py-3  hover:bg-stone-700 transition-colors no-underline duration-300">About Us -> </a>
					</div>

				</div>
			</div>
		</div>

		<!-- partners -->
		<div class="container mx-auto px-4 max-w-6xl flex flex-col md:flex-row items-center md:gap-x-12 h-64">
			<div class="md:w-2/3">
				<div class="px-6">
					<h2 class="text-2xl font-bold mb-3">Welcome to Our Website</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="mt-8">
						<a href="<?php echo site_url('/partners'); ?>" class="bg-black text-white px-6 py-3  hover:bg-stone-700 transition-colors no-underline duration-300">Partners -> </a>
					</div>

				</div>
			</div>
			<div class="md:w-1/3 mb-6 md:mb-0 ">
				<img src="https://workforcepulse.ca/wp-content/uploads/2025/06/engineers.png" alt="two engineers" class="w-full h-auto rounded-lg">
			</div>
			
			
		</div>
		<!-- contact us -->
		 <div class="container mx-auto px-4 max-w-6xl flex flex-col md:flex-row items-center md:gap-x-12 h-64">
			<div class="md:w-1/3 mb-6 md:mb-0 ">
				<img src="https://workforcepulse.ca/wp-content/uploads/2025/06/engineers.png" alt="two engineers" class="w-full h-auto rounded-lg">
			</div>
			<div class="md:w-2/3">
				<div class="px-6">
					<h2 class="text-2xl font-bold mb-3">Welcome to Our Website</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="mt-8">
						<a href="<?php echo site_url('/contact-us'); ?>" class="bg-black text-white px-6 py-3  hover:bg-stone-700 transition-colors no-underline duration-300">Contact Us -> </a>
					</div>

				</div>
			</div>
		</div>
    </section>
</div>
<?php
get_footer();
