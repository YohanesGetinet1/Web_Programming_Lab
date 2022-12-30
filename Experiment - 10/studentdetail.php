<?php
$usn = $_POST["usn"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$number = $_POST["number"];
$email = $_POST["email"];
echo '<table width = "50%" border = "0" cellspacing = "0" cellpadding =
"10"><tr><th colspan = "2"><h2>Details</h2></th></tr>';
echo "<tr>
<th>USN: </th>
<td>$usn</td>
</tr>";
echo "<tr>
<th>Name: </th>
<td>$name</td>
</tr>";
echo "<tr>
<th>Gender: </th>
<td>$gender</td>
</tr>";
echo "<tr>
<th>Date of Birth: </th>
<td>$dob</td>
</tr>";
echo "<tr>
<th>Phone Number: </th>
<td>$number</td>
</tr>";
echo "<tr>
<th>Email-id: </th>
<td>$email</td>
</tr>";
echo "</table>";
?>
