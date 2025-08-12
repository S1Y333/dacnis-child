<?php
/**
 * Template Name: Dashboard Template
 */
?>
<?php get_header(); ?>
<div id="content" class="my-[5rem]  lg:my-[10rem]" >
  <div class="mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl  text-left">
	<h2 class=" mb-3 font-black text-[2rem]">Key Findings</h2>
	<h4 class="mb-4 font-bold text-[#5163AC]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum semper lectus eget sollicitudin. Aliquam blandit, diam euismod tempus tincidunt, purus urna ullamcorper leo, eu lobortis elit lorem non felis. Nullam tempor leo quis risus iaculis bibendum. Phasellus in auctor erat. In lacinia, ex ut dignissim eleifend, ligula est bibendum quam, venenatis lobortis ipsum elit eu sapien. </h4>
	 <ul class="mt-4 mb-4">
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
		 <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis ex euismod, lacinia nisl at, dapibus dolor. Cras vitae mi laoreet, fringilla mi non, convallis elit. Morbi id ante tempus, pellentesque elit nec, sollicitudin mauris. Fusce vitae quam sodales, varius nulla ac, fringilla orci.</li>
	  </ul>
	  
<!-- dashboard iframe	 -->
	<div class="mt-4">
		<div class='tableauPlaceholder' id='viz1753214608719' style='position: relative'>
			<noscript>
				<a href='#'>
					<img alt='Dashboard ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pu&#47;PulseSurveyExampleDash&#47;Dashboard&#47;1_rss.png' style='border: none' />
				</a>
			</noscript>
			<object class='tableauViz'  style='display:none;'>
				<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
				<param name='embed_code_version' value='3' /> 
				<param name='site_root' value='' />
				<param name='name' value='PulseSurveyExampleDash&#47;Dashboard' />
				<param name='tabs' value='no' />
				<param name='toolbar' value='yes' />
				<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pu&#47;PulseSurveyExampleDash&#47;Dashboard&#47;1.png' /> <param name='animate_transition' value='yes' />
				<param name='display_static_image' value='yes' />
				<param name='display_spinner' value='yes' />
				<param name='display_overlay' value='yes' />
				<param name='display_count' value='yes' />
				<param name='language' value='en-US' />
				<param name='filter' value='showOnboarding=true' />
			</object>
		</div>    
		
		<script type='text/javascript'>                    
			var divElement = document.getElementById('viz1753214608719');                    
			var vizElement = divElement.getElementsByTagName('object')[0];                    											     	vizElement.style.width = '100%';
            vizElement.style.height = '100vh'; 
// 			vizElement.style.minWidth='375px';
// 			vizElement.style.maxWidth='100%';
// 			vizElement.style.minHeight='3881px';
// 			vizElement.style.maxHeight=(divElement.offsetWidth*0.75)+'px';                    
			var scriptElement = document.createElement('script');                    
			scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
			vizElement.parentNode.insertBefore(scriptElement, vizElement);                
		</script>
	</div>
   </div>
  
</div>
<?php
get_footer();
