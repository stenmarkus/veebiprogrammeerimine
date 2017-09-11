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
	echo date("d.m.y");.".$partOfDay;
	echo ".<p>";
	echo "<p>Lehe avamise hetkel oli kell " .date ("h:i:s") .".</p>";
	?>
</body>
</html>