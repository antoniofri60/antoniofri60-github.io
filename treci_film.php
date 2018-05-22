<!DOCTYPE html>
<head>
  <title>BoQT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/filmovi.css">
 
</head>
<body>
<div class="container-fluid bg-1 text-center">
<h3>Inglourious Basterds</h3>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
                                
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li> <a href="index.php">Pocetna</a></li>
      </ul>
    </div>
  </div>
</nav>

	
<div class="container-fluid bg-2 text-center">
Nemilosrdni gadovi (eng. Inglourious Basterds) američki je ratni film iz 2009. godine, redatelja Quentina Tarantina.
 Premijerno je prikazan 20. svibnja 2009. na Filmskom festivalu u Cannesu, u službenu je distribuciju pušten 21. kolovoza,
 a u hrvatska je kina stigao 1. rujna. Radnja filma odvija se za vrijeme Drugog svjetskog rata u okupiranoj Francuskoj i prati mladu Židovku Shosannu,
 vlasnicu pariškog kina, kao i skupinu američkih gerilaca židovskog podrijetla.	
 <br>
</div>
<div class="container-fluid bg-3 text-center">
 <p style="font-size:16px;"><b>Inglourious Basterds-trailer(00:02:35):</b></p>
 <br>
  <div id="centar">
  <video id="video1" width="420" >
    <source src="video_zapisi/Pulp Fiction 1994 Official Trailer - Samuel L Jackson John Travolta Movie HD.mp4" type="video/mp4">
    <source src="video_zapisi/Pulp Fiction 1994 Official Trailer - Samuel L Jackson John Travolta Movie HD.ogg" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
 </div>

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 700; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 470; 
} 

</script> 
<button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  </div>
</div>
<footer class="container-fluid text-center" style =" background-color:#FFA500; padding-bottom:50px; padding-top:50px;">
  <a href="treci_film.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> Kreator:Antonio Fržić</p>
  <p> Email:antoniofri60@gmail.com
</footer> 

</body>
</html>