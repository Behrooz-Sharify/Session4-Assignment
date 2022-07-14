<!DOCTYPE html>
<html>

<body>
    <a href='index.php'><button>Back to Main Page</button></a>
	<left>
        <h2>
            Calculator
        </h2>

		<form method="POST">
			<pre>
                Enter First number:     <input type="text" name="number1"><br>
                Enter Second number:    <input type="text" name="number2"><br>
                <input type="Submit" value="Submit">
            </pre>
		</form>
    </left>
</body>

<?php
if($_POST) {
	$number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    echo "<pre>";
        echo "sum is: ".sum($number1, $number2); 
        echo "<br>";
        echo "sub is: ".sub($number1, $number2);
        echo "<br>";
        echo "multiply is: ".multiply($number1, $number2);
        echo "<br>";
        echo "quotient is: ".quotient($number1, $number2);
    echo "</pre>";
}

function sum($num1, $num2){
    return $num1 + $num2;
}

function sub($num1, $num2){
    return $num1 - $num2;
}

function multiply($num1, $num2){
    return $num1 * $num2;
}

function quotient($num1, $num2){
    return $num1 / $num2;
}

?>
