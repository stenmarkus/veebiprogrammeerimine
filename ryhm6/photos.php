<?php
	require_once("../../../config.php");
	require("header.php");
	$dir = '../pildid';
	$database = "if17_ryhm6";
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);

$reiting = $_POST['reiting'];
	$sql = ("INSERT INTO piltide_hindamine(reiting) VALUES('$reiting')");
	if(mysqli_query($mysqli, $sql))
	{
		echo "Pole sisetatud";
		}
	else
	{
		echo "Sisestatud";
		}
	

	
	if ($opendir = opendir($dir))
	{
		while(($file = readdir($opendir)) !== FALSE)
		{
		  if ($file!="."&&$file!="..")
			echo "<img src='$dir/$file' width='400' height='400'>";
		}
	}		
		
	
?>

<div id="rating">
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<p>Hinda seda pilti.<br />
1<input name="reiting" type="radio" value="1" />
2<input name="reiting" type="radio" value="2" />
3<input name="reiting" type="radio" value="3" />
4<input name="reiting" type="radio" value="4" />
5<input name="reiting" type="radio" value="5" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" value="vote" name="vote" /></p>
</form>