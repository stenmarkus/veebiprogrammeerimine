<?php
	require("../../../config.php");
	$database = "if17_lahtsten";

	//loeme toimetamiseks mõtte
	
	function getSingleIdea($editId)
	
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	$stmt= $mysqli->prepare("SELECT idea, ideacolor FROM users WHERE id=?");
	$stmt->bind_param("i"), $editId;
	$stmt->bind_result($idea, $color);
	$stmt->execute();
	$ideaObject = new $tdclass();
	if($stmt->fetch()){
		$ideaobject->text=$idea;
		$ideaobject->color= $color
		
	}
	
	
	$stmt->close();
	$mysqli->close();
	return ; 

function updateIdea($id, $idea, $ideacolor){
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	
	$stmt = mysqli->prepare("UPDATE users SET idea=?, ideacolor=?, WHERE id=?");
	$stmt->bind_param("ssi",$idea, $ideacolor, $id);
	if(stmt->execute()){
		echo "Õnnestus";
	  else (
		echo"Tekkis viga" .$stmt->error;
	
?>