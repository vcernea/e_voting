<?PHP
	include('db.php');
	$date1 = new DateTime("2019-11-27 06:00:00");
	$date2 = new DateTime("now");
	if ($date1 > $date2) {
		echo "Votarea începe la 08:00!";
		return ;
	}

	$date1 = new DateTime("2019-11-27 13:30:00");
	$date2 = new DateTime("now");
	if ($date1 < $date2) {
		echo "Votarea s-a încheiat la 15:30!";
		return ;
	}

	sleep(2);

	header('Content-type: text/html; charset=utf-8');
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	$stmt = $conn->prepare('SELECT * FROM `cetateni` WHERE code = :cod');
	$stmt->bindParam(':cod', $_POST["cod_personal"]);
	$stmt->execute();
	$rez1 = $stmt->fetchAll();
	if (empty($rez1) || $rez1[0]['votat'] == "1") {
		echo "Cod deja utlizat sau invalid!";
		return ;
	} else {
		// if ($rez1['id'] == 281) {
		// 	echo "good";
		// 	return ;
		// }
		$rez1 = $rez1[0];
		
		$stmt = $conn->prepare('UPDATE `cetateni` SET votat = 1 WHERE id = :idd');
		$stmt->bindParam(':idd', $rez1['id']);
		$stmt->execute();
		$stmt = $conn->prepare('UPDATE `voturi` SET cnt = cnt + 1 WHERE partid = :an'); // INSERT INTO `voturi` (partid, cnt) VALUES (:qs, :an)');
		$stmt->bindParam(':an', $_POST['partid']);
		$stmt->execute();
		echo "good";
		return ;
	}
?>