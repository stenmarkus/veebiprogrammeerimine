<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		 sisselogimine
	</title>
</head>
<body>
	<h1>Logi sisse!</h1>
	<form method="POST">
		<label>Teie meiliaadress:<label>
		<input name="loginEmail" type="email">
	</form>
	<form method="POST">
		<label>Teie parool:<label>
		<input name="loginPassword" type="password" type="submit">
		<input id="submitPassword" type="submit" value="Logi sisse">
	</form>
	
	<h2>Või loo uus kasutaja</h2>
	<form method="POST">
		<label>Teie eesnimi:<label>
	<input name="signupFirstName" type="text">
		<label>Teie perekonnanimi:<label>
	<input name="signupFamilyName" type="text" type="submit">
		<label>Teie sugu M/N:<label>
		
	<input type="radio" name="gender" value="1">
	
	<input type="radio" name="gender" value="2">
		
		<label>Teie meiliaadress:<label>
	<input	name="signupEmail" type="email" type="submit">
		<label>Teie parool:<label>
	<input name="signupPassword" type="password">
	<input id="submitPassword" type= "submit" value="Kinnita">
	</form>
	
	