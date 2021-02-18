<?php
$servername = "localhost";
$username = "root";
$password = "Vinay@123";
$dbname = "bank";
$conn = new mysqli($servername, $username,$password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bank Portal</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="bank.css" rel="stylesheet">
</head>
<body id="bd">
	<!--
	<script>
	window.alert=function(){
		debugger;
	}
</script>
-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		    <a class="navbar-brand" href="bank.php">VBI</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="bank.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">About</a>
		        </li>
		        <li class="nav-item">
          		<a class="nav-link" href="#">Contact</a>
        		</li>
      		  </ul>
      		</div>
      	</div>
      </nav>
      <section class="text-center mt-5">
      	<table class="table table-dark table-striped" id="table">
      		<tr id="trfirst">
      			<td>Name</td>
      			<td>Email</td>
      			<td>Balance</td>
      			<td></td>
      		</tr>
      		<script>
      			var array1=[];
      			var array2=[];
      		</script>
	 	  <?php
	 	  	$sql = "SELECT name, email, balance FROM customer";
	 	  	$c=0;
	 	  	$namea=array();
			$emaila=array();
			$balancea=array();
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			  	array_push($namea,$row["name"]);
			  	array_push($emaila,$row["email"]);
			  	array_push($balancea,$row["balance"]);
			} 
			}
			else {
			  echo "No results Found";
			}
			foreach ($namea as $value) {
				?>
				<script >
					array1.push("<?php echo $value; ?>");
				</script>
		    <?php
			}
			foreach ($balancea as $value) {
				?>
				<script >
					array2.push("<?php echo $value; ?>");
				</script>
		    <?php
			}
	 	  ?>   
	 	  <tr id="tr1">
	 	  	<td><?php echo "$namea[0]"?></td><td><?php echo "$emaila[0]"?></td><td><?php echo "$balancea[0]"?></td><td><button onclick="click1('tr1',1,'button1',array1,array1[0],array2[0])" id="button1" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr2">
	 	  	<td><?php echo "$namea[1]"?></td><td><?php echo "$emaila[1]"?></td><td><?php echo "$balancea[1]"?></td><td><button onclick="click1('tr2',2,'button2',array1,array1[1],array2[1])" id="button2" type="button" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr3">
	 	  	<td><?php echo "$namea[2]"?></td><td><?php echo "$emaila[2]"?></td><td><?php echo "$balancea[2]"?></td><td><button onclick="click1('tr3',3,'button3',array1,array1[2],array2[2])" id="button3" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr4">
	 	  	<td><?php echo "$namea[3]"?></td><td><?php echo "$emaila[3]"?></td><td><?php echo "$balancea[3]"?></td><td><button onclick="click1('tr4',4,'button4',array1,array1[3],array2[3])" id="button4" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr5">
	 	  	<td><?php echo "$namea[4]"?></td><td><?php echo "$emaila[4]"?></td><td><?php echo "$balancea[4]"?></td><td><button onclick="click1('tr5',5,'button5',array1,array1[4],array2[4])" id="button5" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr6">
	 	  	<td><?php echo "$namea[5]"?></td><td><?php echo "$emaila[5]"?></td><td><?php echo "$balancea[5]"?></td><td><button onclick="click1('tr6',6,'button6',array1,array1[5],array2[5])" id="button6" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr7">
	 	  	<td><?php echo "$namea[6]"?></td><td><?php echo "$emaila[6]"?></td><td><?php echo "$balancea[6]"?></td><td><button onclick="click1('tr7',7,'button7',array1,array1[6],array2[6])" id="button7" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr8">
	 	  	<td><?php echo "$namea[7]"?></td><td><?php echo "$emaila[7]"?></td><td><?php echo "$balancea[7]"?></td><td><button onclick="click1('tr8',8,'button8',array1,array1[7],array2[7])" id="button8" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr9">
	 	  	<td><?php echo "$namea[8]"?></td><td><?php echo "$emaila[8]"?></td><td><?php echo "$balancea[8]"?></td><td><button onclick="click1('tr9',9,'button9',array1,array1[8],array2[8])" id="button9" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr id="tr10">
	 	  	<td><?php echo "$namea[9]"?></td><td><?php echo "$emaila[9]"?></td><td><?php echo "$balancea[9]"?></td><td><button onclick="click1('tr10',10,'button10',array1,array1[9],array2[9])" id="button10" class="btn btn-light">View</button></td>
	 	  </tr>
	 	  <tr><td style="color:black">empty</td><td style="color:black">empty</td><td style="color:black">empty</td><td style="color:black">empty</td></tr>
	 	</table>
      </section>
      
      <?php 
      if(isset($_GET['submit'])){
      echo $_GET["sel"];
      echo $_GET["sel1"];
      echo "hello";
  }
      ?>
      <from id="form" action="customer.php" method="get">
      </from>
      <?php $conn->close(); ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="bank.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>