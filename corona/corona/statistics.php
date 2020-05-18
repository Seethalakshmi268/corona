<!DOCTYPE html>
<html>
<title>COVID-19 MDU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://media.giphy.com/media/dVuyBgq2z5gVBkFtDc/giphy.gif" style="width:100%">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="tweet.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-twitter w3-xxlarge"></i>
    <p>Tweet</p>
  </a>
  <a href="statistics.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-bar-chart w3-xxlarge"></i>
    <p>Statistics</p>
  </a>
  <a href="indexx.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-map-marker w3-xxlarge"></i>
    <p>Covid</p>
  </a>
<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Admin</p>
</a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="tweet.html" class="w3-bar-item w3-button" style="width:25% !important">TWEET</a>
    <a href="statistics.php" class="w3-bar-item w3-button" style="width:25% !important">STATISTICS</a>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">COVID</a>
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">ADMIN</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black w3-text-white" id="home">
    <h1 class="w3-jumbo w3-large"><span class="w3-hide-small"></span>Covid Tracker</h1>
    <p>For Madurai</p>
<table width='100%'>

<tr>
<th><img src="https://media.tenor.com/images/598c05669353f46daaf7ef9d38e29a45/tenor.gif" style="width:30%"></th>
<th><img src="https://i.pinimg.com/originals/aa/f7/f2/aaf7f2bb862a0004acad5bff2b08d927.gif" style="width:15%"></th>
<th><img src="https://media.tenor.com/images/3ef3153dcf281e60ac8ebad488449227/tenor.gif" style="width:30%"></th>
<th><img src="https://media.tenor.com/images/5b639d6dc870888f5d67666838d2f27e/tenor.gif" style="width:30%"></th>
</tr>

<tr>
<font size="10">
<td>Active </td>
<td>Recovered</td>
<td>Confirmed</td>
<td>Deaths</td>
</font>
</tr>

<tr>
<td><h2 id="demo1"></td>
<td><h2 id="demo2"></td>
<td><h2 id="demo4"></td>
<td><h2 id="demo3"></td>
</tr>


</table>


<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=1 ORDER BY id DESC");
?>

<html>
<head>
	<title>Homepage</title>

</head>

<body>
<font size="5">
	<br>
	<br>
	<a href="newcase.php">Click Here For New Cases</a>
	<br/><br/>
	
	<table width='100%' border=0 >
		<tr bgcolor='black'>
			<td><b>Areas Affected</td>
			<td><b>Total Cases</td>
			
						
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr bgcolor='grey'>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['qty']."</td>";
			
			
		  	echo "</tr>";
		}
		?>
	</table>	
	</font>
</body>
</html>


  </header>
<div class="w3-content w3-justify w3-text-white w3-padding-64" id="about">
    <center><h2 class="w3-text-white">Bar Chart Comparing Old and New Cases</h2></center>
    <hr style="width:900px" class="w3-opacity">
    
<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM products";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ name:'".$row["name"]."', qty:".$row["qty"].", price:".$row["price"]."}, ";
}
$chart_data = substr($chart_data, 0);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:1000px;">
   <h2 align="center"></h2>
   <h3 align="center"></h3>   
   <br /><br />
   <div id="chart"></div>

 </body>
</html>

<script>


Morris.Bar({
 
 element : 'chart',

 data:[<?php echo $chart_data; ?>],

ymax: 10,
 xkey:'name',
 ykeys:['qty','price'],
 padding: 50,
 labels:['old cases','new cases'],
 barRatio: 0.6,
 xLabelAngle: 40,
 hideHover:'auto',
 barColors: ['blue','yellow'],
 stacked:true

});

</script>


      
   
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-white w3-xlarge">
     <a href="https://www.youtube.com/channel/UCsyPEi8BS07G8ZPXmpzIZrg"><i class="fa fa-youtube w3-hover-opacity""></i></a>
   <a href="https://twitter.com/MoHFW_INDIA" ><i class="fa fa-twitter w3-hover-opacity""></i></a>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script src="js/script.js"></script>
<script>
var settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://api.covid19india.org/state_district_wise.json",
	"method": "GET"
}

$.ajax(settings).done(function(response) {
	alldis=response["Tamil Nadu"];
    maddis=alldis["districtData"].Madurai;
	active=maddis.active;
	confirmed=maddis.confirmed;
	recovered=maddis.recovered;
	deceased=maddis.deceased;
	document.getElementById("demo1").innerHTML = active;
	document.getElementById("demo2").innerHTML = recovered;
	document.getElementById("demo3").innerHTML = deceased;
	document.getElementById("demo4").innerHTML = confirmed;
});
</script>

<script src="js/jquery.min.js"></script>

</body>
</html>







