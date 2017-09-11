<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
       programmeerimise asjad
	</title>
</head>
<body>
	<hl> Sten </hl>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<?php
	echo "Kõige esimene php abil väljastatud sõnum";
	echo "<p>Täna on ";
	echo date("d.m.y");
	echo ".<p>";
	echo "<p>Lehe avamise hetkel oli kell " .date ("h:i:s") .".</p>";
	?>
</body>
</html>