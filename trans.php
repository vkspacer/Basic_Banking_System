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
<body>
	<body id="bd">
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
      			<td>Sender</td>
      			<td>Receiver</td>
      			<td>Transferred Amount</td>
      		</tr>
	<script>
		a=localStorage.getItem("val1");
	/*	b=localStorage.getItem("val2");
		c=localStorage.getItem("val3");
		d=localStorage.getItem("val4");
		e=localStorage.getItem("val5");
		f=localStorage.getItem("val6");*/
	</script>
	<?php
		$a=$_GET['receiver'];
		$b=$_GET['balreceiver'];
		$c=$_GET['sender'];
		$d=$_GET['balsender'];
		$e=$_GET['newbalsender'];
		$g=$_GET['count'];
		$sql = "SELECT `name`, `email`, `balance` FROM `customer`";
	 	$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				 while($row = $result->fetch_assoc()) {
			  
				if($row["name"]==$a){
					$l=$row["balance"];
				}
			}
		}
		$f=intval($b)+intval($l);
			
		if($g==1){
		$sql="INSERT INTO `transaction`(`sender`,`receiver`,`transferred amount`) VALUES('$c','$a','$b')";
		if($conn->query($sql)==TRUE){
			}
		else{
			echo "error:".$sql."<br>".$conn->error;
		}
		header("LOCATION: trans.php?sender=$c&receiver=$a&balsender=$e&balreceiver=$c&newbalsender=$e&count='1'");
	}
		echo "<h3 style='word-spacing:1rem;letter-spacing:0.5rem'>TRANSACTION HISTORY</h3>";
		$sql = "SELECT `sender`,`receiver`,`transferred amount` FROM `transaction`";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			  // output data of each row

			  while($row = $result->fetch_assoc()) {
		?>
		<tr><td><?php echo $row["sender"] ?></td><td><?php echo $row["receiver"] ?></td><td><?php echo $row["transferred amount"] ?></td></tr>
		<?php
			} 
			}
			else {
			  echo "<h2>No results Found</h2>";
			}
			$sql1="UPDATE `customer` SET `balance`='$e' WHERE `name`='$c'";
			$sql2="UPDATE `customer` SET `balance`='$f' WHERE `name`='$a'";
			if($conn->query($sql1)==TRUE && $conn->query($sql2)==TRUE){
				echo "<script>alert('SUCCESS')</script>";
			}
			$conn->close();
	?>
	</table>
	<button class="btn btn-secondary mx-auto mb-5 mt-2" onclick="window.location='bank.php'">BACK TO HOME</button>
	</section>
	
</body>
</html>
