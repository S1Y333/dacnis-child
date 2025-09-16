<?php
/**
 * Template Name: Dashboard Template
 */
?>
<?php get_header(); ?>
<div id="content"  >
	 <section class="h-full w-full">
	  <div class=" bg-cover transition-all duration-300 ease-out border-solid border-b-[20px] border-[#5163AC] text-white h-[40rem] flex flex-col justify-end" style="background-image:url('https://workforcepulse.ca/wp-content/uploads/2025/08/hero-image-scaled.jpeg'); height:35rem; background-position:bottom;">
		<div class="mb-8 mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl w-full sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full text-left">
		  <h1 class=" text-12 font-black w-fit">
			Workforce Pulse Dashboard
		  </h1>
		</div>
	  </div>
  </section>
	
  <div class="mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl  text-left">
	<h2 class=" mb-3 font-black text-[2rem]">Workforce Pulse Dashboard</h2>
	<h4 class="mb-4 font-bold text-[#5163AC]">The Workforce Pulse interactive dashboard enables users to explore survey data in depth, creating customized views that highlight the information most relevant to their specific needs. With flexible filters and drill-down features, users can uncover insights by region, workforce size, or specific workforce challenges.</h4>
<!-- 	 <ul class="mt-4 mb-4">
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
	  </ul> -->

<!-- dashboard iframe	 -->
	 <div class="mt-16">
		 <div class='tableauPlaceholder' id='viz1757523318369' style='position: relative'>
			 <noscript>
				 <a href='#'>
					 <img alt='Survey FindingsAug 2025 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pu&#47;PulseSurveyDesktopBetaAug12&#47;Main&#47;1_rss.png' style='border: none' />
				 </a>
			 </noscript>
			 <object class='tableauViz'  style='display:none;'>
				 <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
				 <param name='embed_code_version' value='3' /> 
				 <param name='site_root' value='' />
				 <param name='name' value='PulseSurveyDesktopBetaAug12&#47;Main' />
				 <param name='tabs' value='no' /><param name='toolbar' value='yes' />
				 <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pu&#47;PulseSurveyDesktopBetaAug12&#47;Main&#47;1.png' /> 
				 <param name='animate_transition' value='yes' />
				 <param name='display_static_image' value='yes' />
				 <param name='display_spinner' value='yes' />
				 <param name='display_overlay' value='yes' />
				 <param name='display_count' value='yes' />
				 <param name='language' value='en-US' />
			 </object>
		 </div>                
		 <script type='text/javascript'>                    
			 var divElement = document.getElementById('viz1757523318369');                    
			 var vizElement = divElement.getElementsByTagName('object')[0];                   													
			 vizElement.style.width = "100%";
             // For mobile (width < 768px), use auto height
			  if (window.innerWidth < 768) {
				vizElement.style.width = "100%";
				vizElement.style.height = "auto";
			  } else {
				// Desktop/tablet: keep aspect ratio
				vizElement.style.width = "100%";
				vizElement.style.height = (divElement.offsetWidth * 0.75) + "px";
			  }              
			 var scriptElement = document.createElement('script');                    
			 scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    									 vizElement.parentNode.insertBefore(scriptElement, vizElement);                
		 </script>
	  </div>


   </div>
  
</div>
<?php
get_footer();
