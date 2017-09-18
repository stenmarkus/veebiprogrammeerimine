<?php
	//muutujad
	$myName = "Sten Markus";
	$myFamilyName = "Laht";
	
	$hourNow = date("H");
	//echo $hournow;
	//võrdlen kellaaega ja annan hinnangu, mis päeva osaga on tegemist (<    >)
	$partOfDay = "";
	if ( $hourNow < 16 ){
		$partOfDay = "varajane hommik";
		
	//echo $partOfDay
	if ( $hourNow >= 8 and $hourNow <16 ) (
		$partOfDay = "koolipäev";
	
	if ( $hourNow >= 16) (
		$partOfDay = "vaba aeg"; (
	}
	//vanusega seotud muutujad
	$myAge=0;
	$ageNote = "";
	$myBirthYear;
	
	
	//echo $_POST;
	//arvutame vanuse
	if ( isset)($_POST("birthyear"]))(
	$myAge= date("Y") - $_POST_("birthyear");
	$ageNote = "<p>Te olete umbes" . $myAge. "aastat vana<p>"
	}
	//lihtne tsükkel
	for ($i = 0; $i <5; $i ++) {
		echo "ha";	
	}	
	
	?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>
       programmeerimise asjad
	</title>
</head>
<body>
	<h1>
	<?php
	echo $myName ." " .$myFamilyName;
	?>
	Sten </h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<?php
	
	
	echo "Kõige esimene php abil väljastatud sõnum";
	echo "<p>Täna on ";
	echo date("d.m.y").$partOfDay;
	
	echo ".<p>";
	echo "<p>Lehe avamise hetkel oli kell " .date ("h:i:s") .".</p>";
	?>
	<form method= "POST">
		<label>1998: </label>
		<input name ="birthyear" id= "birthyear" type= "number" max= "2017" min= "1900">
	<input id= "submitbirthyear" type="submit" value= "Kinnita">
	</form>
	<?php
		if( $ageNote != "")(
			echo $ageNote
</body>
</html>
	
	



	

