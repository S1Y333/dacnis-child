<?php
/**
 * Template Name: SEPT Home Template
 */
?>
<?php get_header(); ?>
<div id="content" >
<!--  hero  -->
  <section class="h-full w-full">
	  <div class=" bg-cover transition-all duration-300 ease-out border-0 border-solid border-b-[20px] border-[#5163AC] text-white h-[40rem] flex flex-col justify-end" style="background-image:url('https://workforcepulse.ca/wp-content/uploads/2025/08/hero-image-scaled.jpeg'); height:30rem; background-position:bottom;">
		<div class="mb-8 mx-auto px-4  max-w-full sm:max-w-container-sm md:max-w-container-md lg:max-w-container-lg xl:max-w-container-xl 2xl:max-w-container-2xl text-left overflow-hidden">
		  <h1 class=" text-12 font-black w-fit">
			<?php _e('Workforce Pulse - Grounded Insight. Informed Action. A Stronger Workforce.', 'Dacnis-child');?>
		  </h1>
		</div>
	  </div>
  </section>

  <!-- intro section -->
  <section class=" mt-16 pb-12 ">
      <div class="mt-12 mx-auto px-4 max-w-full sm:max-w-container-sm
          md:max-w-container-md lg:max-w-container-lg
          xl:max-w-container-xl 2xl:max-w-container-2xl text-left">
      <h2 class=" mb-0 font-black text-10"><?php _e('Welcome to Workforce Pulse', 'Dacnis-child');?></h2>
      <h4 class="mb-4 mt-1 font-bold text-[#5163AC] "><?php _e('Grounded Insight. Informed Action. A Stronger Workforce.', 'Dacnis-child');?></h4>
      <p class="font-normal md:font-light"><?php _e('Workforce Pulse is an initiative from fourteen national sectoral and workforce development organizations. It gathers timely, employer-driven insights about the workforce from Canada’s most vital economic sectors. Workforce Pulse bridges the gap between policy and practice by collecting real-world insights directly from businesses. ', 'Dacnis-child');?>
        </p>
        <div style="padding:0.5rem 2rem; background-color:#F5F5F5; border-radius:20px;">
			 <h2 class=" text-10 mb-4"><?php _e('What We’re Measuring:', 'Dacnis-child');?></h2>
      
			
			<ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 " style="margin-top:2rem">
				<li class="p-1 border-l-4 border-blue-500 "><?php _e('Tariff disruption and impacts', 'Dacnis-child');?></li>
				<li class="p-1 border-l-4 border-blue-500 "><?php _e('Current staffing realities', 'Dacnis-child');?></li>
				<li class="p-1 border-l-4 border-blue-500 "><?php _e('Future hiring outlooks', 'Dacnis-child');?></li>
				<li class="p-1 border-l-4 border-blue-500 "><?php _e('The hardest roles to fill', 'Dacnis-child');?></li>
				<li class="p-1 border-l-4 border-blue-500 "><?php _e('Organizational needs', 'Dacnis-child');?></li>
			</ul>
		 </div>
        

	  
	  
      </div>
  
  </section>
   <!-- key findings -->
     <section class=" my-12" >
      <div class="mt-12 mx-auto px-4 max-w-full sm:max-w-container-sm
          md:max-w-container-md lg:max-w-container-lg
          xl:max-w-container-xl 2xl:max-w-container-2xl text-left">
      		<h2 class=" font-black text-10"><?php _e('Read the October 2025 Report', 'Dacnis-child');?> </h2>
		   
		  <!-- About Us -->
  <div class="mt-12 mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl">
    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-20">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/10/WP-report.jpg" 
             alt="report image" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-2/3">
        <h3 class="text-10  mb-4"><?php _e('Cautious Stability in a Shifting Economy', 'Dacnis-child');?></h3>
        <p class="mb-6 font-normal md:font-light"><?php _e('In July/August 2025, over 2,100 Canadian employers reported cautious stability in the labour market. Despite trade frictions, shifting policies, and rising costs, most expect to maintain or grow their 
workforce, even as industries like manufacturing, construction, and retail face sharper 
disruptions', 'Dacnis-child');?></p>
        
        <a href="/sector-reports/" class=" h-10 no-underline bg-[#C3DA63] rounded-[50px] text-black flex transition-colors w-56 flex justify-between items-center " >
          <p class="pl-4 font-bold">
            <?php _e('Read Report', 'Dacnis-child');?>
          </p>
			    <img class=" w-5 h-4 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
      </a>
      </div>
    </div>
  </div>
  <!-- Partners (Reversed) -->
  <div class="my-12 mx-auto px-4 max-w-full sm:max-w-container-sm
       md:max-w-container-md lg:max-w-container-lg
       xl:max-w-container-xl 2xl:max-w-container-2xl">
    <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-20">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/10/WP-dashboard.jpg" 
             alt="chart" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-1/2">
        <h3 class="text-10  mb-4"><?php _e('Deeper Insights at Your Fingertips', 'Dacnis-child');?></h3>
        <p class="mb-6 font-normal md:font-light">
			<?php _e('The dashboard takes you deeper into these findings, exploring sector-specific impacts, persistent talent shortages, and how employers are balancing short-term adjustments with long-term strategies. Discover timely intelligence and trends to help navigate today’s uncertain economic climate.', 'Dacnis-child');?>
		</p>
        
      <a href="/dashboard" class="h-10 no-underline bg-[#C3DA63] rounded-[50px] text-black flex transition-colors w-56 justify-between flex items-center" >
          <p class="pl-4  font-bold">
            <?php _e('Dashboard', 'Dacnis-child');?>
          </p>
			    <img class=" w-5 h-4 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
      </a>
      </div>
    </div>
  </div>

  <!-- partner logos -->
		<h3 class="text-[#5163AC] mt-16" style="border-bottom: 2px dotted #d1d5db;">
			<?php _e('Partners', 'Dacnis-child');?>
		  </h3>
		  
	   <div class="grid grid-cols-7 gap-2 px-4 my-12" style="flex-wrap: wrap;justify-content: space-between;">
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
		<div class="md:flex my-12 gap-8">
	    <a href="/partners" class="h-10 no-underline bg-[#C3DA63] rounded-[50px] text-black flex transition-colors justify-between flex items-center " style="width:17rem;" >
          <p class="pl-4  font-bold">
            <?php _e('Meet the Partners', 'Dacnis-child');?>
          </p>
			    <img class=" w-5 h-4 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
      </a>

	  </div>
	 	</div>
	</section>
	
	


</div>
<?php
get_footer();
