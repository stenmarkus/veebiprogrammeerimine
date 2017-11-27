<?php
	require("functions.php");
	require("../../../config.php");
	$database = "if17_ryhm6";
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	$Name = $_POST['pealkiri'];
	$sql = "INSERT INTO pildid(nimi) VALUES('$Name')";
	if(!mysqli_query($mysqli, $sql))
	{
		echo "Pole sisetatud";
	}
	else
	{
		echo "Sisestatud";
	}
		
 	
	//Algab foto laadimise osa
	$target_dir = "../pildid/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	//Kas vajutati üleslaadimise nuppu
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$notice .= "Fail on pilt - " . $check["mime"] . ". ";
			$uploadOk = 1;
		} else {
			$notice .= "See pole pildifail. ";
			$uploadOk = 0;
		}
		//Kas selline pilt on juba üles laetud
		if (file_exists($target_file)) {
			$notice .= "Kahjuks on selle nimega pilt juba olemas. ";
			$uploadOk = 0;
		}
		//Piirame faili suuruse
		if ($_FILES["fileToUpload"]["size"] > 1000000) {
			$notice .= "Pilt on liiga suur! ";
			$uploadOk = 0;
		}
		
		//Piirame failitüüpe
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			$notice .= "Vabandust, vaid JPG, JPEG, PNG ja GIF failid on lubatud! ";
			$uploadOk = 0;
		}
		
		//Kas saab laadida?
		if ($uploadOk == 0) {
			$notice .= "Vabandust, pilti ei laetud üles! ";
		//Kui saab üles laadida
		} else {		
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$notice .= "Fail ". basename( $_FILES["fileToUpload"]["name"]). " laeti üles! ";
			} else {
				$notice .= "Vabandust, üleslaadimisel tekkis tõrge! ";
			}
		}	
		
	}//kas üles laadimine lõppeb
	
	
	require("header.php");
?>

<!DOCTYPE html>


<html>
<body>
	<hr>
	<h2>Foto üleslaadimine</h2>
	<form action="photoupload.php" method="post" enctype="multipart/form-data">
		<label>Valige pildifail:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<label>Pane pildile nimi:</label>
		<input type="text" name="pealkiri">
		<input type="submit" value="Sisesta">
		<input type="submit" value="Lae üles" name="submit">
	</form>
	
	<span><?php echo $notice; ?></span>
	<hr>
</body>
</html>