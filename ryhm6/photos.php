<?php
	require_once("../../../config.php");
	require("header.php");
	$dir = '../pildid';
	
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
1<input name="rating" type="radio" value="1" />
2<input name="rating" type="radio" value="2" />
3<input name="rating" type="radio" value="3" />
4<input name="rating" type="radio" value="4" />
5<input name="rating" type="radio" value="5" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" value="vote" name="vote" /></p>
</form>