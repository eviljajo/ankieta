<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 1;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>
<html>
<head>
<title>Ankieta Portale Społecznościowe</title>
</head>


<body>

<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 7;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>



<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 2;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>


<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>



<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 3;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>

<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 4;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 5;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 6;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 8;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>



<?PHP
require 'C:/xampp/htdocs/survey/configure.php';
	if (isset($_GET['h1'])) {
		$qID = $_GET['h1'];
	} else {
		$qID = 9;
	}

	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';


	$A = "";
	$B = "";
	$C = "";


	$database = "survey";

	$db_found = new mysqli($server, $user_name, $password, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, OptionG FROM tblsurvey WHERE ID = ?");

		if ($stmt) {
			$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
			
			

			}
			else {
				print "Bład- brak kolumn";
			}
		}
		else {
			print "Błąd Bazy";
		}

	}
	else {
		print "Brak połaczenia z baza";
	}


?>






<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="WynikiAnkiety.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "Wyniki Ankiety">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>

</body>
</html>











