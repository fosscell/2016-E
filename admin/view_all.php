<?php
require "config.php";
$qry = "SELECT * FROM instamojo_responses";
$rslt = $mysqli->query($qry);
echo "<table>";
if ($rslt->num_rows <= 0) {
	echo "Error getting record: " . $mysqli->error;
} else {
	// output data of each row
	while($row = $rslt->fetch_assoc()) {
		echo "<tr>";
		echo "<td> $row['ID'] </td>";
		echo "<td> $row['PHONE_NUMBER'] </td>";
		echo "<td> $row['E_MAIL'] </td>";
		echo "<td> $row['BUYER_NAME'] </td>";
		echo "<td> $row['AMOUNT_PAID'] </td>";
		echo "<td> $row['purpose'] </td>";
		echo "<td> $row['STATUS'] </td>";
		echo "<td> $row['SHORT_URL'] </td>";
		echo "<td> $row['LONG_URL'] </td>";
		echo "<td> $row['modified_at'] </td>";
		echo "<td> $row['FOOD_PREFS'] </td>";
		echo "<td> $row['T_SHIRTS'] </td>";
		echo "<td> $row['ORG_NAME'] </td>";
		echo "</tr>";
	}
}
echo "</table>";
?>