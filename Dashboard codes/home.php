<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<style>
.footer {
  position: bottom;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: black;
  text-align: center;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Major Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"> <?=$_SESSION['name']?></a>
      </li>
    </ul>
  </div>
</nav>

      <div width="100%">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->
      		<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			<iframe width="49%" height="270" style="border: 1px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/494042"></iframe>

			
      	<?php }else { ?>
      		<!-- FORE USERS -->
      		<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			<iframe width="49%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1995169/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			
			
      	<?php } ?>
      </div>
<div class="footer">
  <p>Remote Patient Health Monitoring</p>
</div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>