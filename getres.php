<?PHP
	include('db.php');
	header('Content-type: text/html; charset=utf-8');
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	if (isset($_REQUEST['code']) && $_POST['code'] == 'victorzabest') {

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total1 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=1 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi1 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=2");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total2 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=2 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi2 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=3");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total3 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=3 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi3 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=4");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total4 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=4 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi4 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=5");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total5 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=5 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi5 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=6");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total6 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=6 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi6 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=7");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total7 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=7 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi7 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=8");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total8 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=8 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi8 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=9");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total9 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=9 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi9 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=10");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total10 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=10 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi10 = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=11");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total11 = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=11 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturi11 = $stmt->fetchColumn();



		$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=20");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$profi = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE clasa=20 AND votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$profi = $stmt->fetchColumn();

		$stmt = $conn->prepare("SELECT count(*) FROM cetateni");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$totalt = $stmt->fetchColumn();$stmt = $conn->prepare("SELECT count(*) FROM cetateni WHERE votat=1");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$voturit = $stmt->fetchColumn();

		// echo $voturi1 . " " . $total1 . "<br>";
		// echo $voturi2 . " " . $total2 . "<br>";
		// echo $voturi3 . " " . $total3 . "<br>";
		// echo $voturi4 . " " . $total4 . "<br>";
		// echo $voturi5 . " " . $total5 . "<br>";
		// echo $voturi6 . " " . $total6 . "<br>";
		// echo $voturi7 . " " . $total7 . "<br>";
		// echo $voturi8 . " " . $total8 . "<br>";
		// echo $voturi9 . " " . $total9 . "<br>";
		// echo $voturi10 . " " . $total10 . "<br>";
		// echo $voturi11 . " " . $total11. "<br>";

		echo json_encode(array(
			array(
				// "indexLabel" => strval(intval(($voturi1*100)/$total1))."%",
				'color' => "#4661EE",
				x => 1,
				y => intval(($voturi1*100)/$total1),
				"label" => "X „A” (".strval(intval(($voturi1*100)/$total1))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi2*100)/$total2))."%",
				'color' => "#EC5657",
				x => 2,
				y => intval(($voturi2*100)/$total2),
				"label" => "X „B” (".strval(intval(($voturi2*100)/$total2))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi3*100)/$total3))."%",
				'color' => "#1BCDD1",
				x => 3,
				y => intval(($voturi3*100)/$total3),
				"label" => "X „C” (".strval(intval(($voturi3*100)/$total3))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi4*100)/$total4))."%",
				'color' => "#8FAABB",
				x => 4,
				y => intval(($voturi4*100)/$total4),
				"label" => "X „U” (".strval(intval(($voturi4*100)/$total4))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi5*100)/$total5))."%",
				'color' => "#B08BEB",
				x => 5,
				y => intval(($voturi5*100)/$total5),
				"label" => "XI „A” (".strval(intval(($voturi5*100)/$total5))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi6*100)/$total6))."%",
				'color' => "#3EA0DD",
				x => 6,
				y => intval(($voturi6*100)/$total6),
				"label" => "XI „B” (".strval(intval(($voturi6*100)/$total6))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi7*100)/$total7))."%",
				'color' => "#F5A52A",
				x => 7,
				y => intval(($voturi7*100)/$total7),
				"label" => "XI „C” (".strval(intval(($voturi7*100)/$total7))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi8*100)/$total8))."%",
				'color' => "#23BFAA",
				x => 8,
				y => intval(($voturi8*100)/$total8),
				"label" => "XI „U” (".strval(intval(($voturi8*100)/$total8))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi9*100)/$total9))."%",
				'color' => "#FAA586",
				x => 9,
				y => intval(($voturi9*100)/$total9),
				"label" => "XII „A” (".strval(intval(($voturi9*100)/$total9))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi10*100)/$total10))."%",
				'color' => "#EB8CC6",
				x => 10,
				y => intval(($voturi10*100)/$total10),
				"label" => "XII „B” (".strval(intval(($voturi10*100)/$total10))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi11*100)/$total11))."%",
				'color' => "#F5C52A",
				x => 11,
				y => intval(($voturi11*100)/$total11),
				"label" => "XII „C” (".strval(intval(($voturi11*100)/$total11))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturi11*100)/$total11))."%",
				'color' => "#A5752A",
				x => 12,
				y => intval(($profi*100)/$total11),
				"label" => "Profesori (".strval(intval(($profi*100)/$total11))."%)",
			),
			array(
				// "indexLabel" => strval(intval(($voturit*100)/$totalt))."%",
				'color' => "#13A59D",
				x => 13,
				y => intval(($voturit*100)/$totalt),
				"label" => "Total (".strval(intval(($voturit*100)/$totalt))."%)",
			),
		));
	}


?>