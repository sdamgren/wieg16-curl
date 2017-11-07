<?php
$x = $_POST["name"];
echo "<p> Namn: '$x' </p>";

$_POST["email"];
echo "<p> Email: '$x' </p>";

?>


<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<h1> Form </h1>

<form action="form.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

