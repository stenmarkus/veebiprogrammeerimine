<?php
	require("header.php");
	require("../../../config.php");
	$database = "if17_ryhm6";
	$dir = '../pildid';

	
		//Ühendus andmebaasiga
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		//Kontrollimine, kas kinnitati reiting
		if(isset($_POST['reiting'])) {
			echo "Sisestatud";
		}
		elseif(isset($_POST['reiting2'])){
			echo "Sisestatud";
		}
		elseif(isset($_POST['reiting3'])){
			echo "Sisestatud";
		}	
		
		//Pildifaili nime kuvamine
		$reiting = $_POST['reiting'];
		$reiting2 = $_POST['reiting2'];
		$reiting3 = $_POST['reiting3'];
		$pilt = scandir($dir);
		$pilt2 = $dir . $pilt[2];
		$pilt3 = $dir . $pilt[3];
		$pilt4 = $dir . $pilt[4];
			
   //Andmete sisestamine andmebaasi
   $korras=("INSERT INTO piltide_hindamine(reiting, photoid) VALUES('$reiting', '$pilt2')");
   $korras2=("INSERT INTO piltide_hindamine(reiting, photoid) VALUES('$reiting2', '$pilt3')");
   $korras3=("INSERT INTO piltide_hindamine(reiting, photoid) VALUES('$reiting3', '$pilt4')");
   if(mysqli_query($mysqli, $korras)){
	   echo "Sisestamine õnnestus";
   }
   elseif(mysqli_query($mysqli, $korras2)){
	   echo "Sisestamine õnnestus";
   }
   elseif(mysqli_query($mysqli, $korras3)){
	   echo "Sisestamine õnnestus";
   }   
   
  
?>


<!DOCTYPE html> 
<html>
<head>
<style> <!-- See on galerii välimuse osa-->
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 360px;
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 50%;
    height: 50%;
}
div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>
<!--class on galerii, et saaks välimust muuta-->
<div class="gallery"><!--DIV ALGUS-->
    <img src='../pildid/4.jpg' width='400' height='400'>
 </a>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<p>&nbsp; <!--TÜHIK-->
1<input name="reiting" type="radio" value="1" />
2<input name="reiting" type="radio" value="2" />
3<input name="reiting" type="radio" value="3" />
4<input name="reiting" type="radio" value="4" />
5<input name="reiting" type="radio" value="5" />
 &nbsp;&nbsp;<!--TÜHIKUD-->
<input type="hidden" name="id" value="<?php echo $notice; ?>" />
<input type="submit" value="Salvesta" name="action" /></p>
</div><!--DIV LÕPP-->



<div class="gallery">
    <img src='../pildid/2.jpg' width="50" height="50">
  </a>
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<p>&nbsp;
1<input name="reiting2" type="radio" value="1" />
2<input name="reiting2" type="radio" value="2" />
3<input name="reiting2" type="radio" value="3" />
4<input name="reiting2" type="radio" value="4" />
5<input name="reiting2" type="radio" value="5" />
 &nbsp;&nbsp;
<input type="hidden" name="id" value="<?php echo $notice; ?>" />
<input type="submit" value="Salvesta" name="action" /></p>
</div>



<div class="gallery">
    <img src='../pildid/3.jpg' width="50" height="50">
</a>
  
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<p>&nbsp;
1<input name="reiting3" type="radio" value="1" />
2<input name="reiting3" type="radio" value="2" />
3<input name="reiting3" type="radio" value="3" />
4<input name="reiting3" type="radio" value="4" />
5<input name="reiting3" type="radio" value="5" />
 &nbsp;&nbsp;
<input type="hidden" name="id" value="<?php echo $notice; ?>" />
<input type="submit" value="Salvesta" name="action" /></p>




</body>
</html>