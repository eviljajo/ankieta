<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
$voteMessage = "";
session_start();
if ((isset($_SESSION['hasVoted']))) {
	if ($_SESSION['hasVoted'] = '1') {
		$voteMessage = "Już Głosowałeś!";
	}
}
else {
	if (isset($_GET['Submit1']) && isset($_GET['q'])) {

		$selected_radio = $_GET['q'];
		$idNumber = $_GET['h1'];

		$database = "survey";

		$db_found = new mysqli($server, $user_name, $password, $database );

		if ($db_found) {

			if($selected_radio == "A") {
				$votedSQL = "UPDATE tblsurvey SET VotedA = VotedA + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else if($selected_radio == "B"){
				$votedSQL = "UPDATE tblsurvey SET VotedB = VotedB + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else if($selected_radio == "C"){
				$votedSQL = "UPDATE tblsurvey SET VotedC = VotedC + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else {
				print "Bład- Nie zarejestrowano głosu";
			}	
		}
	}
	else {
		print "Błąd- nie wybrałeś odpowiedzi!";
	}
}

function insert_vote($db, $sql, $id) {

	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	$stmt->execute();

	//$_SESSION['hasVoted'] = '1';
	return "Dziekujemy za glosowanie!";
}

?>

<html>
<head>
<title>Przetwarzanie wyników</title>
</head>



<body>
<?PHP print $voteMessage . "<BR>"; ?>
</body>
</html>

