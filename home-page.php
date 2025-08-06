<?php
/**
 * Template Name: Home Template
 */
?>
<?php get_header(); ?>
<div id="content" class="my-[5rem] lg:my-[10rem]">
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl text-left">
	<h2 class=" mb-3 font-black text-[2rem]">Welcome to Workforce Pulse</h2>
	<h4 class="mb-4 font-bold ">Grounded Insight. Informed Action. A Stronger Workforce.</h4>
	<p>Workforce Pulse is a national initiative designed to capture timely, employer-driven insights from across Canada’s most vital economic sectors. In a time of economic uncertainty, shifting trade dynamics, and evolving workforce demands, Workforce Pulse helps bridge the gap between policy and practice by collecting real-world input directly from businesses. By capturing business sentiment around staffing needs, hiring outlooks, and workforce challenges, we’re equipping decision-makers—from industry leaders to government planners—with the insights they need to navigate change and invest in workforce solutions that reflect real-world conditions.
	  <br/>
	  <br/>
	  Funded by the <span class="font-bold">Future Skills Centre (FSC)</span>, Workforce Pulse represents a unified effort to strengthen Canada’s workforce strategy through evidence-based intelligence.
	  </p>
   </div>
   <!-- image and intro section, image on the left and intro on the right with a button to jump to other pages -->
	<section class="space-y-12 py-12">
		
  <!-- About Us -->
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl">
    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-[5rem]">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/graph-1@2x-scaled.png" 
             alt="pie chart" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-2/3">
        <h2 class="text-2xl font-bold mb-4">Powered by a National Network</h2>
        <p class="mb-6">Workforce Pulse brings together fourteen national sector leaders—from manufacturing and mining to clean energy, construction, and food processing—representing over two-thirds of Canada’s private-sector workforce. These organizations play a critical role in collecting and validating insights, ensuring that what we measure reflects the lived realities of employers across the country.</p>
        
        <a href="/partners" class=" m-4 no-underline bg-black hover:bg-stone-700 rounded-[50px] text-white flex transition-colors w-[30%] flex items-center" >
          <p class="pl-4">
            Meet our Partners
          </p>
			    <img class=" w-[1.2rem] h-4 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
      </a>
      </div>
    </div>
  </div>

  <!-- Partners (Reversed) -->
  <div class="mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl">
    <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-[5rem]">
      <div class="w-full md:w-1/2">
        <img src="https://workforcepulse.ca/wp-content/uploads/2025/08/graph-2@2x-scaled.png" 
             alt="bar chart" 
             class="w-full h-auto rounded-lg">
      </div>
      <div class="w-full md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">What We’re Measuring</h2>
        <p class="mb-6">
			<span class="font-bold">A Ground-Level View of Canada’s Workforce Pressures</span>
			<br/>
			To understand how businesses are adapting in today’s climate, Workforce Pulse captures data across four key focus areas:
			<ul>
				<li>Current Workforce Staffing Situation</li> 
				<li>Future Outlook Insight into what’s next</li>
				<li>Roles Most Challenging to Fill </li>
				<li>Tariff Impacts and Organizational Needs </li>
		   </ul>
		</p>
        
      <a href="/partners" class=" m-4 no-underline bg-black hover:bg-stone-700 rounded-[50px] text-white flex transition-colors w-[35%] flex items-center" >
          <p class="pl-4">
            Learn more
          </p>
			    <img class=" w-[1.2rem] h-4 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
      </a>
      </div>
    </div>
  </div>
	
	<!-- banner   -->
	<div class="mt-[8rem] mx-auto px-4 max-w-full xs:max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl text-left bg-[#5163AC] rounded-[50px] flex justify-center gap-[5rem]" >
		<p class="font-bold p-4 text-white" >
			Explore visualized survey results here, to reflect emerging trends and workforce dynamics.
		</p>
		<a href="/partners" class=" m-4 no-underline border border-solid border-white rounded-[50px] text-white flex transition-colors items-center" >
      <p class="pl-4">
			 Explore 
			</p>
			<img class=" w-[1.2rem] h-4 p-4" src="https://workforcepulse.ca/wp-content/uploads/2025/08/arrow-right-long@2x.png"  alt="right arrow on button">
    </a>
	</div>

</section>
</div>
<?php
get_footer();
