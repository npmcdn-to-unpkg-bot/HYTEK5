<?php 
	include('head.php'); 

	$music = $_GET['music'];
	$ambiance = $_GET['ambiance'];
	$weapons = $_GET['weapons'];
	$birds = $_GET['birds'];

	$music = $music/10;
	$ambiance = $ambiance/10;
	$weapons = $weapons/10;
	$birds = $birds/10;

	//echo "$music,$ambiance,$weapons,$birds";

	switch ($_GET['settings']) {
		case 'low':
			$set = 0;
			break;
		case 'normal':
			$set = 1;
			break;
		case 'ultra':
			$set = 2;
			break;
		default:
			$set = 1;
			break;
	}

	mysqli_query($link,"UPDATE settings INNER JOIN players ON settings.id_player=players.id_player SET presets = '$set' , aud_musics  = '$music' , aud_ambiances  = '$ambiance' , aud_weapons  = '$weapons' , aud_birds  = '$birds' WHERE players.id_player = $_SESSION[id_player];");

	header("location: index.php");

?>