@include('welcome/header')
@yield('header')

    <div class="row container " >
	<div class='col-md-11'>
        <ul id="myTab" class="nav nav-tabs">
   <li class="active">
      <a href="#home" data-toggle="tab">
        Who We Are
      </a>
   </li>
   <li><a href="#ios" data-toggle="tab">Mission</a></li>
   <li class="dropdown">
      <a href="#" id="myTabDrop1" class="dropdown-toggle" 
         data-toggle="dropdown">Vision 
         <b class="caret"></b>
      </a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
         <li><a href="#jmeter" tabindex="-1" data-toggle="tab">jmeter</a></li>
         <li><a href="#ejb" tabindex="-1" data-toggle="tab">ejb</a></li>
      </ul>
   </li>
</ul>
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="home">
      <p>Tutorials Point is a place for beginners in all technical areas. 
         This website covers most of the latest technoligies and explains 
         each of the technology with simple examples. You also have a 
         <b>tryit</b> editor, wherein you can edit your code and 
         try out different possibilities of the examples.</p>
   </div>
   <div class="tab-pane fade" id="ios">
      <p>iOS is a mobile operating system developed and distributed by Apple 
         Inc. Originally released in 2007 for the iPhone, iPod Touch, and 
         Apple TV. iOS is derived from OS X, with which it shares the 
         Darwin foundation. iOS is Apple's mobile version of the 
         OS X operating system used on Apple computers.</p>
   </div>
   <div class="tab-pane fade" id="jmeter">
      <p>jMeter is an Open Source testing software. It is 100% pure 
      Java application for load and performance testing.</p>
   </div>
   <div class="tab-pane fade" id="ejb">
      <p>Enterprise Java Beans (EJB) is a development architecture 
         for building highly scalable and robust enterprise level    
         applications to be deployed on J2EE compliant 
         Application Server such as JBOSS, Web Logic etc.
      </p>
   </div>
</div>

    </div>

</div>
</div>
@include('welcome/footer')
@yield('footer')