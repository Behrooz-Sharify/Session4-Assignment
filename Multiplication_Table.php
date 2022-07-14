<!DOCTYPE html>
<html>

<body>
	<a href='index.php'><button>Back to Main Page</button></a>
	<left>
        <h2>
            Multiplication Table
        </h2>

		<form method="POST">
			Enter a number: <input type="text" name="number">
			<input type="Submit" value="submit">
		</form>
    </left>
</body>

</html>

<?php
if($_POST) {
	$number = $_POST["number"];
		
	for ($i = 1; $i <= 10; $i++) {
		echo ("<p>$number". " X " . "$i" . " = ". $number * $i . "</p>");
	}
}
?>
