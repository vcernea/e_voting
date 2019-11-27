<?PHP
// return;
	include('db.php');
	header('Content-type: text/html; charset=utf-8');
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	
		// $stmt = $conn->prepare("SELECT SUM(cnt) FROM voturi WHERE partid = 'quest1' AND cnt = 'option1'");
	function calcs($qs) {
		global $stmt, $conn;
		$sql = "SELECT * FROM voturi WHERE id = 1";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$senat1 = $stmt->fetchAll();
		$senat1 = intval($senat1[0]['cnt']);
		// echo $senat1;

		$sql = "SELECT * FROM voturi WHERE id = 2";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$senat2 = $stmt->fetchAll();
		$senat2 = intval($senat2[0]['cnt']);
		// echo $senat2;

		$total = $senat1 + $senat2;
		if ($qs == "partid1") $votes = $senat1;
		else if ($qs == "partid2") $votes = $senat2;
		else if ($qs == "partid3") {
			$votes = $total;
			$total = 313;
		}

		return $votes . "   (".round(($votes*100)/$total, 1)."%)";
	}
?>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="img/favicon.ico">

		<title>Voteaza!</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/signin/">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="css/signin.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style type="text/css">
			.quantity {
				padding-left: 20%;
			}
		</style>
	</head>

	<body>

	<section class="quiz m-0">
		<div class="container">
				<div class="row">
					<div class="card col-sm-4 offset-sm-1 mx-5 my-0 m-sm-auto">
						<img class="card-img-top mt-2 rounded-circle" src="img/hai5.jpg">
						<div class="card-body funkyradio">
							<h4 class="card-title text-center text-body">Hai FAIV</h4>
						</div>
						<div class="card-body funkyradio">
							<h4 class="card-title text-center text-body"><?PHP echo calcs("partid1"); ?></h4>
						</div>
					</div>
					<div class="card col-sm-4 offset-sm-2 mx-5 my-3 m-sm-auto">
						<img class="card-img-top mt-2 rounded-circle" src="img/ois.jpg">
						<div class="card-body funkyradio">
							<h4 class="card-title text-center text-body">Owls in Suits</h4>
						</div>
						<div class="card-body funkyradio">
							<h4 class="card-title text-center text-body"><?PHP echo calcs("partid2"); ?></h4>
						</div>
					</div>
				</div>
				<div class="w-50 mx-auto p-5 text-center">
					<h2>Total: <?PHP echo calcs("partid3"); ?></h2>
				</div>
		</div>
	</section>
</body></html>