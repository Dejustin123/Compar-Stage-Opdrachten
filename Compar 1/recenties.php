<?php
include 'header.php';
// voegd de header toe
?>

	<div class="container-fluid text-center" id="serieus">
		<h1 id="h1">wat serieuze recenties</h1>
	</div>
	<br>
	<?php
	require 'datalayer.php';

	$inputs = array("Name","Recentie");
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$valid = true;
			foreach($inputs as $value) {
				$data[$value] = "";
				$error[$value] = "";
				if (empty($_POST[$value])) {
					$error[$value] = "Required";
					$valid = false;
				}
				else {
					$data[$value] = test_input($_POST[$value]);
				}
			}
			if($valid) {
				InsertDescriptie($conn,$data);
				echo "<div class='container text-center' id='Rcont'>";
            	echo "Bedankt voor het plaatsen van een recentie.";
            	echo "</div> <br>";
				
			}
		}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	

	$content = GetRecentie($conn);
	foreach($content as $recentie){
	?>
	<div class='container' id="recentieBox">
	<style>
	#Rcont{
		background-color:aqua;
		margin: 0 auto;
    	padding: 10px;
    	border-radius: 10px;
	}
	#htxt{
    color: #001f3f;
	}
	#ptxt{
		color: #001f3f;
	}
	</style>
	<h1 id="htxt">Naam : <?php echo $recentie['Name'];?></h1>
	<br>
	<br>
	<p id="ptxt">Recentie: <?php echo $recentie['Recentie'];?></p>
	<br>
	</div>
	<br>
	<?php
	}
	?>
	<div class="container" alt="formcont" id="formCont">
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<div class="form-group">
			<label>Naam</label>
			<!-- voor gezorgd dat alleen de naam blijft staan -->
			: <input class="form-control" type="text" value="<?php echo $_POST['Name']; ?>" name="Name"><?php echo $error['Name']; ?><br>
		</div>
		<br>
		<div class="form-group">
			<label>Descriptie</label>
			Maximaal 400 letters : <textarea class="form-control" type="text" name="Recentie"value="<?php echo $_POST['Recentie'];?>" rows="3"><?php echo $_POST['Recentie'];?></textarea><?php echo $error['Recentie']; ?><br>
		</div>
		<input type="submit" value="submit" class="btn-lg btn-dark">
		</form>
	</div>
	<br>

<?php
include 'footer.php';
// voegd de footer toe
?>