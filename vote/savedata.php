
<?php

 $vot_vname = $_POST['vname'];
 $vot_state = $_POST['state'];
 $vot_local = $_POST['local'];
 $vot_party = $_POST['party'];
 $vot_cname = $_POST['cname'];
 $vot_position = $_POST['position'];

$conn = mysqli_connect("localhost","root","","vote") or die("Connection Failed");

$sql = "INSERT INTO election(VotersName, VotersState, VotersLGA, CandidateParty, CandidateName, CandidatePosition) VALUES ('{$vot_vname}','{$vot_state}','{$vot_local}','{$vot_party}','{$vot_cname}','{$vot_position}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/vote/index.php");

mysqli_close($conn);

?>
