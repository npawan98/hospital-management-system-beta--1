<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>
	YOUR APPOINTMENTS :<br>
</h1>


<?php

$sql=mysqli_connect("localhost","root","","test");

$q = "SELECT fname, age, sex FROM project";
$result = mysqli_query($sql,$q);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
        echo "First Name " . $row["fname"]. " - Age: " . $row["age"]. " Sex: " . $row["sex"]. "<br>";
    }
}

mysqli_close($sql);

?>

</body>
</html>