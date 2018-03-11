<!DOCTYPE html>
<html>
<head>
	<title>event schedule</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
</style>
</head>
<body>
	<div class="bg">
<h1 style="color: white;text-align: center;">Events Schedule</h1>
  <ul class="main">
  <li class="date">
    <h3 >March 25</h3>
    <p>List of Events</p>
  </li >
  <li class= "events">
    <ul class="events-detail">


       <li class="C1">
          <span class="event-name">- Robotics </span><br><br><span class="event-location">ground </span><button id="nav" onclick="getLocation1()">Get Location &#8594</button>
      </li>
   <br><br>
      <li class="C1" >
        

          <span class="event-name">- Switch Coding </span><br><br><span class="event-location">CIF,VSSUT Burla</span><button id="nav" onclick="getLocation2()">Get Location &#8594</button>
         
        
      </li>
<br><br>
      <li class="C1" >
          <span class="event-name">- Treasure Hunt </span><br><br><span class="event-location"> vssut canteen </span><button id="nav" onclick="getLocation3()">Get Location &#8594</button>
         
        
      </li>
         <br><br>
<li class="C1">
          <span class="event-name">- Gaming </span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation4()">Get Location &#8594</button>
      </li>
         <br><br>
      <li class="C1">
          <span class="event-name">- Hackathon </span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation5()">Get Location &#8594</button>
      </li>
         <br><br>
      <li class="C1">
          <span class="event-name">-Quiz </span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation6()">Get Location &#8594</button>
      </li>
         <br><br>
         
      <li class="C1">
          <span class="event-name">- Paper Presentation </span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation7()">Get Location &#8594</button>
      </li>
         <br><br>
      <li class="C1">
          <span class="event-name">- Photography</span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation8()">Get Location &#8594</button>
      </li>
         <br><br>
      <li class="C1">
          <span class="event-name">- Designing </span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation9()">Get Location &#8594</button>
      </li>
         <br><br>
     <li class="C1">
          <span class="event-name">- Assembling </span><br><br><span class="event-location">CSE-IT department</span><button id="nav" onclick="getLocation10()">Get Location &#8594</button>
      </li>
         <br><br>

    </ul>  
  </li>


</ul>
<script>
	function getLocation1() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition1);
    } else { 
    }
}


function showPosition1(position) {
    a = "https://www.google.co.in/maps/dir//''/@21.4963149,83.8691427,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4c7bbb467:0x3cee4891891a18be!2m2!1d83.9041623!2d21.4963185?hl=en";
    
    window.open(a,"_blank");
}
	function getLocation2() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition2);
    } else { 
    }
}


function showPosition2(position) {
    a = "https://www.google.co.in/maps/dir//CIF+Vssut,+Burla,+Burla,+Odisha+768018/@21.4977177,83.9043706,227m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x3a213da49b177eb5:0xa91d2328f58ed325!2m2!1d83.9051457!2d21.4976103?hl=en";
    
    window.open(a,"_blank");
}
	function getLocation3() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition3);
    } else { 
    }
}


function showPosition3(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=en";
    
    window.open(a,"_blank");
}
	function getLocation4() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition4);
    } else { 
    }
}


function showPosition4(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=en";
    
    window.open(a,"_blank");
}
	function getLocation5() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition5);
    } else { 
    }
}


function showPosition5(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=en";
    
    window.open(a,"_blank");
}
	function getLocation6() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition6);
    } else { 
    }
}


function showPosition6(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=en";
    
    window.open(a,"_blank");
}
	function getLocation7() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition7);
    } else { 
    }
}


function showPosition7(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=enn";
    
    window.open(a,"_blank");
}
function getLocation8() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition8);
    } else { 
    }
}


function showPosition8(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=enn";
    
    window.open(a,"_blank");
}
function getLocation9() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition9);
    } else { 
    }
}


function showPosition9(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=enn";
    
    window.open(a,"_blank");
}
function getLocation10() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition10);
    } else { 
    }
}


function showPosition10(position) {
    a = "https://www.google.co.in/maps/dir//Department+Of+Computer+Science+,+IT+and+MCA,+Burla,+Odisha+768018/@21.498275,83.9035387,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a213da4f5900001:0x2ff9f072d7be2686!2m2!1d83.9041295!2d21.4982576?hl=enn";
    
    window.open(a,"_blank");
}
</script>
</ul>
</div>
</body>
</html>