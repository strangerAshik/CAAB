@include('welcome/header')
@yield('header')

    <div class="row container " >
	<div class='col-md-11'>
        <ul id="myTab" class="nav nav-tabs">
   <li class="active">
      <a href="#home" data-toggle="tab">
       About ASRTM
      </a>
   </li>
   <li><a href="#mission" data-toggle="tab">Mission</a></li>
   <li><a href="#REGULATIONS" data-toggle="tab">REGULATIONS</a></li>
  
</ul>
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="home" style="padding:20px;">
     <p>Aviation safety is a term encompassing the theory, investigation, and categorization of flight failures, and the prevention of such failures through regulation, education, and training. It can also be applied in the context of campaigns that inform the public as to the safety of air travel. Aviation Safety Oversight Reporting, Tracking & Management, which are key to the seamless backbone of a modern CAA system, separately or as a bundle, 11 databases specifically designed to support the safety oversight obligations. These databases are very interactive, providing notifications and standard reporting and document issuance making an electronic CAA. The ASRTM databases are "regulations-neutral." They are designed to work with any country's regulations, based on ICAO Annex (1,2,6,7,8,13,18 &19). </p>
	 <ul>
<li>1.	Airlines, Maintenance Organization and training center certification & management Database </li>
<li>2.	Pilot, Flight engineers & Air traffic Controllers Management </li>
<li>3.	Document control, file tracking & management system</li>
<li>4.	Safety oversight reporting system </li>
<li>5.	Aircraft certification & management database</li>
<li>6.	Employee management database</li>
<li>7.	OJT & Formal Training database</li>
<li>8.	Electronic library</li>
<li>9.	Wildlife strike database</li>
<li>10.	Aircraft accident & Incident investigation Database </li>
<li>11.	Aerodrome & ANS inspection database</li>

</ul>

   </div>
   <style>
   .padding{padding:20px 0px 0px 30px;}
   </style>
   <div class="tab-pane fade" id="mission">
    <p class='padding'> The air transport industry plays a major role in world economic activity. One of the key elements to maintaining the vitality of civil aviation is to ensure safe, secure, efficient and environmentally sustainable operations at the global, regional and national levels.
	</p>
    <p class='padding'>International Civil Aviation Organization (ICAO) was created to promote the safe and orderly development of international civil aviation throughout the world.
	</p>
     <p class='padding'> ICAO sets the Standards and Recommended Practices (SARPs) necessary for aviation safety, security, efficiency and environmental protection on a global basis. ICAO serves as the primary forum for co-operation in all fields of civil aviation among its 191 Member States.
	 </p>
     <p class='padding'>Improving the safety of the global air transport system is ICAO’s guiding and most fundamental Strategic Objective. The Organization works constantly to address and enhance global aviation safety through the following coordinated activities.
	 </p>
     <p class='padding'>In USOAP most of the country failed to manage their inspection and auditing procedure for their Pilots, Aircrafts, Organization, and Training & System. So our mission is to establish aviation safety issue and functions of Civil Aviation Authority digitally. This system is built to design for maintaining Civil Aviation Authority of any country, any regulation & any standards.
	 </p>

   </div>
   <div class="tab-pane fade" id="REGULATIONS">
  <h3>REGULATIONS </h3>
<ul class='padding'>
 <li>Part 1: General Policies</li>

<li> Part 2: Aircraft Registration</li>

<li>Part 3: Aircraft & Component Original Certification</li>

<li>Part 4: Continuing Airworthiness</li>

<li>Part 5: Approved Maintenance Organization</li>

<li> Part 6: Instruments & Equipment</li>

<li> Part 7: Personnel Licensing</li>

<li> Part 8: Medical Licensing</li>

<li> Part 9: Approved Training Organization</li>

<li> Part 10: Operations of Aircraft</li>

<li> Part 11: Aerial Work</li>

<li> Part 12: Air Operator (AOC) Certification & Administration</li>

<li> Part 13: Passenger-Carrying/Cabin Crew Members</li>

<li> Part 14: AOC Personnel Qualification</li>

<li> Part 15: AOC Flight Time Limitations</li>

<li> Part 16: Operational Control</li>

<li>Part 17: Aircraft Mass, Balance & Performance</li>

<li> Part 18: Transportation of Dangerous Goods</li>

<li> Part 19: Aircraft Accident & Incident Investigation</li>

<li> Part 20: Corporate Operations</li>
<li> Part 21: Foreign Operators</li>
</ul>
<h3>REGULATION COVARING of ICAO DOCUMENTS</h3>
<ul class='padding'>
	<li>Annex 1: Personnel Licensing</li>

<li> Annex 2: Rules of the Air</li>

<li>Annex 6, Part 1: International Commercial Air Transport - Aeroplanes</li>

<li> Annex 6, Part 2: International General Aviation Operations - Aeroplanes</li>

<li> Annex 6, Part 3: international Operations of Helicopters</li>

<li>Annex 7: Registration of Aircraft</li>

<li>Annex 8: Airworthiness of Aircraft</li>

<li> Annex 13: Accident & Incident Investigation</li>

<li> Annex 18: Safe Transportation of Dangerous Goods</li>

</ul>
   </div>
</div>

    </div>

</div>
</div>
@include('welcome/footer')
@yield('footer')