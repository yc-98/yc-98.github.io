<!DOCTYPE html>
<html>
<head>
	   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bilbo' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Economica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <link rel="stylesheet" href="main.css">
<link rel="stylesheet" type="text/css" href="nav.css">
	<title>Treasure Hunt!</title>
</head>

<body class="bc-3">
<style>
@media screen and (min-width: 768px) {
    .plogo{
      width: 20%; margin-top: -10px;
    }
  }
  @media screen and (max-width: 768px ) and (min-width: 650px){
    .plogo{
      padding-top: 0px; margin-top: -35px;width: 20%;
    }
  }
  @media screen and (max-width: 650px ) and (min-width: 400px){
    .plogo{
      padding-top: 0px; margin-top: -50px;width: 35%;
    }
  }
  @media screen and (max-width: 399px) {
    .plogo{
      padding-top: 0px; margin-top: -42px;width: 50%;
    }
    }
    .bc-3{
        background-color: #1e253e;
    }
    .fw{
        color: white!important;
    }
    .black-box{
        background-color: #181a31;
    }
    .overy{
        overflow-y: scroll !important;
        height: 100% !important;
    }
    .btn-white{
        background: white;
        border-radius: 20px;
        padding-left: 20px;
        padding-right: 20px;
        font-family: 'Quicksand', 'sans-serif';
        color: darkslateblue;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);

    }
    .btn-red{
        background-color: #f1445f;
        color: white;
        border-radius: 20px;
        padding-left: 20px;
        padding-right: 20px;
        box-shadow: 0px 5px 10px rgba(241, 68, 95, 0.25);
    }

    .btn-white:hover,.btn-white:focus{
        background: whitesmoke;
        color: darkblue;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
    }

    .bt
    n-red:hover,.btn-red:focus{
        background: #972b3d;
        color: white;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  
  text-align: center;
  font-family: arial;
}
.navbar {
      margin-bottom: 0;
      background-color: rgba(1,38,57,0.7);
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #0080ff !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .ddbut{
        border: 4px solid #0099cc;
        background-color:#50BFE6;
    }
    .hhbut{
        border: 4px solid #ebb914;
        background-color: #EFC94C;
    }
    .mmbut{
        border: 4px solid #de6621;
        background-color:#E27A3F;
    }
    .ssbut{
        border: 4px solid #c33522;
        background-color:#DF5A49;
    }
    .hhbut,.mmbut,.ssbut,.ddbut{
        border-radius: 8px;
    }
    
   
    li{
        display: inline;
    }
</style>

 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"; >
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #ff3300;color:orange;">
        <span class="icon-bar" style="background-color: orange;"></span>
        <span class="icon-bar" style="background-color: orange;"></span>
        <span class="icon-bar" style="background-color: orange;"></span>               
      </button>
      <a class="navbar-brand" href="#myPage"><img src="paraj.png" class="plogo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-right" style="list-style-type: none;margin: 0;padding: 0">
        <li ><a href="https://yc-98.github.io/">HOME</a></li>
         <li><a href="#treasurehunt">TREASURE HUNT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container w-100 h-100" >


    <div class="row h-100 justify-content-center" >
        <div class="col-xl-10 col-lg-10 col-md-12 col-12 p-5 " >

<h4 id="treasurehunt"  class="fn1 fw my-5"><br><br><br>  Treasure Hunt | Hunt' Em All Down! </h4>

            <p class="f2 c-theme-2 p-5 black-box" style="text-space: 3px"><br><br>
            	<img src="treasurehunt.jpeg" style="width: 100%;height: 95%;">
            	
                <br><br>
                “Not all treasure‘s silver and gold, mate.”<br><br>
                The bitland of VSSUT! are full of treasures yet to be unraveled; a team of six or less, a bag of clues and one ultimate winner.<br>  Prajwalit presents you the Treasure Hunt, a race around the lush green VSSUT campus, with the most bizarre and mind-boggling tasks with the prize worth Rs.500 to grab. <br>Excited! much?<br>

                Get ready to hit the ground running,overtaking opponents and be the first one to Grab onto treasures that holds it all.This time the hunting land is VSSUT !, an event conducted by Prajwalit , where you will be provided clues and have to reach location physically to find the ultimate prize. Champions !! of the event will be awarded exciting prizes.<br><br>Let the hunt begin!<br> <br>

                  <span style="font-size:200%;">Rules</span>
            <br><br>
                
                  Maximum of five members per team.<br>
                  The Treasure Hunt consists of 4-5 clues, each one leading to the next clue. Each correctly solved clue carries 10 points. And final Treasure carries 50 points.<br>
                  The clues are to be found in a particular order. A team cannot skip a clue. Skipping a clue leads to disqualification of the team.<br>
                  If you found other team’s clue by any chance never tamper it. A violation of this rule could cause disqualification of your team<br>
                  All the clues of the teams are different and located at different places but the final destination i.e. the treasure is same. The team which finds the treasure wins first.<br>
                

<span style="font-size:200%;">Prize Worth!</span><br>
Rs.500<br><br>
                Register on the link given below!<br><br>
                <a class="btn btn-red" href=""> Register Now!</a>
</p>


</p>
<h1 style="color: white;padding-left: 5%;padding-top: 2%;text-align: center; ">Our Coordinaters</h1>
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-2" style="border:1px black solid; color:white"></div>
<div class="col-lg-2" style="border:1px black solid; color:white"></div>

<div class="col-lg-2" style="border:1px black solid; color:white"><div class="card">
  <img src="test.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <div align="left" style="padding-left:25%;">
    <a href="#" style="font-size: 18px; text-decoration: none;color: black;"><i class="fa fa-envelope"> 123@gmail.com</i></a><br><br>
    <a href="#" style="font-size: 18px; text-decoration: none;color: black;"><i class="fa fa-phone"></i> 1234567890</a> 
 </div>
</div></div>
	<div class="col-lg-2" style="border:1px black solid; color:white"><div class="card">
  <img src="test.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <div align="left" style="padding-left:25%;">
    <a href="#" style="font-size: 18px; text-decoration: none;color: black;"><i class="fa fa-envelope"> 123@gmail.com</i></a><br><br>
    <a href="#" style="font-size: 18px; text-decoration: none;color: black;"><i class="fa fa-phone"></i> 1234567890</a> 
 </div>
</div>
</div>
 <div class="col-lg-2" style="border:1px black solid; color:white"></div>
<div class="col-lg-2" style="border:1px black solid; color:white"></div>

 </div>
</div>

    </div>

    </div>
</div>

</body>
</html>

