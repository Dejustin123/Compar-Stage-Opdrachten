<?php
include 'header.php';
// voegd de header toe
?><br>
<div class="container text-center" alt="formcont" id="formCont">
    <h3>Hier kunt u met ons contact opnemen.</h3>
    <br>
    <p>U kunt ons hier uw e-mail achterlaten of contact opnemen via de telefoon.</p><br>
    <p>0183-Gorinchem telefonie.</p>
</div>

<br>

<?php
require 'datalayer.php';

$inputs = array("Name","mail","Descriptie");
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
            InsertMail($conn,$data);
            echo "<div class='container text-center' id='formCont'>";
            echo "Bedankt voor het contact opnemen.";
            echo "</div> <br>";
		}
    }
function test_input($data) {
    $data = trim($data);
	$data = stripslashes($data);
    $data = htmlspecialchars($data);
	return $data;
}

?>
<div class="container" alt="formcont" id="text1">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<div class="form-group">
		<label>Naam</label>
		: <input class="form-control" type="text" value="<?php echo $_POST['Name']; ?>" name="Name"><?php echo $error['Name']; ?><br>
	</div>
	<br>
	<div class="form-group">
		<label>E-mail</label>
		<input class="form-control" type="text" value="<?php echo $_POST['mail'];?>" name="mail"></textarea><?php echo $error['mail']; ?><br>
	</div>
	<div class="form-group">
			<label>Beschrijving</label>
			 :<textarea class="form-control" value="<?php echo $_POST['Descriptie'];?>" name="Descriptie"id="exampleFormControlTextarea1" rows="3"><?php echo $_POST['Descriptie'];?></textarea><?php echo $error['Descriptie'];?><br>
			<br>
		</div>
	<input type="submit" value="submit" class="btn-lg btn-dark">
	</form>
</div>

<br>
<?php
include 'footer2.php';
// voegd de footer 2 toe
//
?>