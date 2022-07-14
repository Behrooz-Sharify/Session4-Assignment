<body>
    <a href='index.php'><button>Back to Main Page</button></a>
    <h1>Enter number of Row and Column to draw the Rectangle</h1>
		<form method="POST">
			<pre>
                Rows:       <input type="text" name="row"><br>
                Columns:    <input type="text" name="column"><br>
                <input type="Submit" value="Submit">
            </pre>
		</form>
</body>

<?php

    if($_POST) {
        $row = $_POST["row"];
        $column = $_POST["column"];

        echo rectangle($row, $column);
    }



    function rectangle($r, $c)
    {
        for($i = 1; $i <= $r; $i++){
            for($j = 1; $j <= $c; $j++){
                if($i == 1 || $i == $r || $j == 1 || $j == $c){
                    echo '* ';
                }
                else{
                    echo '&nbsp&nbsp&nbsp';
                }
            }
            echo '<br>';
        }
    }
?>
