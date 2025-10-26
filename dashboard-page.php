<?php
/**
 * Template Name: Dashboard Template
 */
?>
<?php get_header(); ?>
<div id="content"  >
	 <section class="h-full w-full">
	  <div class=" bg-cover transition-all duration-300 ease-out  flex flex-col justify-end" style="background-color: black; height:8rem; ">
	
	  </div>
  </section>
	
  <div class="mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl  text-left">
	<h2 class=" mb-3 font-black text-[2rem]"><?php _e('Dashboard', 'Dacnis-child');?></h2>

<!-- dashboard iframe	 -->
	 <div class="mt-16">             	 
<!-- new one -->
		<div class='tableauPlaceholder' id='viz1759775398977' style='position: relative'>
			<noscript>
				<a href='#'>
					<img alt='Website Version ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Wo&#47;WorkforceSurveyPulseWebsiteEdition&#47;WebsiteVersion&#47;1_rss.png' style='border: none' />
				</a>
			</noscript>
			<object class='tableauViz'  style='display:none;'>
				<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
				<param name='embed_code_version' value='3' /> 
				<param name='site_root' value='' />
				<param name='name' value='WorkforceSurveyPulseWebsiteEdition&#47;WebsiteVersion' />
				<param name='tabs' value='no' />
				<param name='toolbar' value='yes' />
				<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Wo&#47;WorkforceSurveyPulseWebsiteEdition&#47;WebsiteVersion&#47;1.png' /> 
				<param name='animate_transition' value='yes' />
				<param name='display_static_image' value='yes' />
				<param name='display_spinner' value='yes' />
				<param name='display_overlay' value='yes' />
				<param name='display_count' value='yes' />
				<param name='language' value='en-US' />
			</object>
		</div>     
		 
		 <!-- partner logos -->
		<h3 class="text-[#5163AC] mt-12" style="border-bottom: 2px dotted #d1d5db;">
			<?php _e('Partners', 'Dacnis-child');?>
		  </h3>
		  
	   <div class="grid grid-cols-7 gap-2 px-4 mt-12" style="flex-wrap: wrap;justify-content: space-between; margin-bottom:2rem;">
			<img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-bioTalent-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-buildforce-16-9.png" class="w-full h-auto" />
		    <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-CAGBC-16-9.png" class="w-full h-auto" />
		    <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-CAHRC-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-careersInEnergy-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-CCAA-16-9.png" class="w-full h-auto" />
		    <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-CSTEC-16-9.png" class="w-full h-auto" />
		    <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-eco-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-EHRC-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-emc-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-FPSC-16-9.png" class="w-full h-auto" />
			<img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-MIHR-16-9.png" class="w-full h-auto" />
			<img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-THRC-16-9.png" class="w-full h-auto" />
		   <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/logo-tourismHR-16-9.png" class="w-full h-auto" />  
	   </div>
		 <script type='text/javascript'>                   
			 var divElement = document.getElementById('viz1759775398977');                    
			 var vizElement = divElement.getElementsByTagName('object')[0];                   
			 if ( divElement.offsetWidth > 800 ) {
				vizElement.style.minWidth='1100px';vizElement.style.maxWidth='1900px';
				 vizElement.style.width='100%';
				 vizElement.style.minHeight='927px';
				 vizElement.style.maxHeight='969px';
				 vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} 
			 else if ( divElement.offsetWidth > 500 ) { 
				 vizElement.style.width='100%';
				 vizElement.style.height='1527px';} 
			 else { vizElement.style.width='100%';
				   vizElement.style.height='3027px';
				  }                     
			 var scriptElement = document.createElement('script');                    
			 scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
			 vizElement.parentNode.insertBefore(scriptElement, vizElement);                
		 </script>
	  </div>
   </div>
  
</div>
<?php
get_footer();
