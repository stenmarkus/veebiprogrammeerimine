<?php
	require("functions.php");
	require("editideafunctions")
	
	$notice = "";
	$ideas = "";
	
	//kui pole sisse logitud, liigume login lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}
	
	//väljalogimine
	if(isset($_GET["logout"])){
		session_destroy(); //lõpetab sessiooni
		header("Location: login.php");
	}
	
	//kui klõpsati uuendamise nupule
	if(isset($_POST["ideaBtn"])){
		updateIdea($_POST["id"], test_input($_POST["userIdea"]), $_POST["ideaColor"]);
		header("location:userideas.php");
		exit();
		
		
	function deletreIdea($id){
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt= $mysqli->prepare("UPDATE users SET deleted=NOW() WHERE id=? AND deleted IS NULL ORDER BY id DESC");
	
	
	
	$idea= getSingleIdea($_GET["id"]);
	
	
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Andrus Rinde veebiprogemise asjad
	</title>
</head>
<body>
	
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<p><a href="?logout=1">Logi välja</a></p>
	<p><a href="userIdeas.php">Tagasi mõtete lehele</a></p>
	<h2>Head mõtted</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<input name="id" type="hidden" value="><?php echo $_GET("id")?>">
		<label>Hea mõte: </label>
		<textarea name="userIdea"><?php echo $idea?>
		<input name="userIdea" type="text">
		<br>
		<label>Mõttega seostuv värv: </label>
		<input name="ideaColor" type="color">
		<br>
		<input name="ideaBtn" type="submit" value="Salvesta mõte!"><span><?php echo $notice; ?></span>
	</form>
	<p><a href="?id=<?=$_GET["id"];?>$delete=true"
	<hr>

	
</body>
</html>