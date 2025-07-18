<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<style>
	.hero-container {
		background-image:url(https://workforcepulse.ca/wp-content/uploads/2025/07/0c0c7ef00c73405461207596c7a0e651e7ae3715-scaled.jpg);
		background-size:cover;
		background-position:center bottom;
		transition: 0.3s ease-out;
		border-bottom: #5163AC 0.9rem solid;
		color:white;
		height:40rem;
		display: flex;          /* Enable Flexbox */
		flex-direction: column; /* Stack children vertically */
		justify-content: flex-end; 
	}
	
	.button-style {
		background-color: #C3DA63;border-radius: 2rem;
		border-style: none;
		
	}
</style>
<section style="heigh:100%; width:100%">

	<div class="hero-container">
		<div class="mb-[2rem] mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl text-left" >
			<h1>
			Hero Title dolor sit amet, consectetur adipiscing elit 
		</h1>
		<h4>
			Consectetur adipiscing elit. Cras eget nibh vitae mauris viverra aliquam. Mauris lobortis accumsan ante et.
		</h4>
		<a href="https://magnetnetwork.ca" class="button-style  inline-block text-black text-center text-decoration-none" style="padding: 0.5rem 1rem;text-decoration: none;color: black;">
                Button ->
            </a>
		</div>
		 
	</div>
</section>