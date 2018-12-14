<html>
    <head>
    <title>booking confirmed</title>

</head>
<body>
    <h1> Booking confirmed </h1>
<form action="F:/XAMPP/htdocs/test1/f.html">
    <button id="myButton">home</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "F:/XAMPP/htdocs/test1/f.html";
    };
</script>
</form>


</body>
</html>



<?php
$fname= $_POST['fname'];
$age= $_POST['age'];
$sex=$_POST['sex'];
$sql=mysqli_connect("localhost","root","","test");
$select="insert into project(fname,age,sex) values('".$fname."','".$age."','".$sex."')";
mysqli_query($sql,$select);
mysqli_close($sql);
?>