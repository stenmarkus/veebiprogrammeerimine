<?php
	<form method="POST" action="/~rinde/veebiprogrammeerimine_2017/kontroll/readMonths.php">
	<select name="selLang">
		<option value="" selected disabled>Vali keel</option>
		<option value="eesti">eesti</option> 
<option value="inglise">inglise</option> 
<option value="saksa">saksa</option> 
<option value="soome">soome</option> 
<option value="eesti rahvakalender">eesti rahvakalender</option> 
<option value="katalaani">katalaani</option> 
<option value="ladina">ladina</option>
<option value="juhuslik keel">juhuslik keel</option> 
	
	
	
?>
	

	<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>kontrolltöö</title>
</head>
<body>
	<h1>Sisesta keel!</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<?php echo $languageSelectHTML;
	?>
	
