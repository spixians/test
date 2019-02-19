<html>
<head>
	<title>Experiment 1 - B</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row" style="width: 100%; margin: 0 auto;">
        <div class="col-sm-4">
            <div style="width: 100%; margin: 0 auto;">
                <form action="sortarray.php" method="POST">
                    <div class="form-group">
                        <div class="row" style="padding-left: 50px;">
                            <br>
                            <h1>Array Form</h1>
                        </div>
                        <div class="row">
							<div class="col-sm-4" style="padding-left: 50px">
								<h4>Number 1</h4>
							</div>
                            <div class="col-sm-4" style="padding-left: 50px;">
                                <input type="number" class="form-control" name="number1">
                            </div>
                        </div>
                        <div class="row">
							<div class="col-sm-4" style="padding-left: 50px">
								<h4>Number 2</h4>
							</div>
                            <div class="col-sm-4" style="padding-left: 50px;">
                                <input type="number" class="form-control" name="number2">
                            </div>
                        </div>
                        <div class="row">
							<div class="col-sm-4" style="padding-left: 50px">
								<h4>Number 3</h4>
							</div>
                            <div class="col-sm-4" style="padding-left: 50px;">
                                <input type="number" class="form-control" name="number3">
                            </div>
                        </div>
                        <div class="row">
							<div class="col-sm-4" style="padding-left: 50px">
								<h4>Number 4</h4>
							</div>
                            <div class="col-sm-4" style="padding-left: 50px;">
                                <input type="number" class="form-control" name="number4">
                            </div>
                        </div>
                        <div class="row">
							<div class="col-sm-4" style="padding-left: 50px">
								<h4>Number 5</h4>
							</div>
                            <div class="col-sm-4" style="padding-left: 50px;">
                                <input type="number" class="form-control" name="number5">
                            </div>
                        </div>
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4" style="padding-left: 50px;">
                                <input type="Submit" class="btn btn-default" name="submit">
                                <br><br>
                            </div>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<?php

		// Retrieve data from POST request
		ini_set('display_errors', 1);
		$numbers = array($_POST['number1'], $_POST['number2'], $_POST['number3'], $_POST['number4'], $_POST['number5']);
		$length = count($numbers);
		
		// sort()
		echo "<div class='well'>";
		sort($numbers);
		echo "<h2>sort()</h2><h3>";
		for($x = 0; $x < $length; $x++) {
			echo $numbers[$x]."<br>";
		}
		echo "</h3></div>";

		// rsort()
		echo "<div class='well'>";
		rsort($numbers);
		echo "<h2>rsort()</h2><h3>";
		for($x = 0; $x < $length; $x++) {
			echo $numbers[$x]."<br>";
		}
		echo "</h3></div>";

		// For key-value sorting
		$numbers = array("Number 1"=>$_POST['number1'], "Number 2"=>$_POST['number2'], "Number 3"=>$_POST['number3'], "Number 4"=>$_POST['number4'], "Number 5"=>$_POST['number5']);
		
		// ksort()
		ksort($numbers);
		echo "<div class='well'>";
		echo "<h2>ksort()</h2><h3>";
		foreach($numbers as $key=>$value) {
			echo $key."->".$value."<br>";
		}
		echo "</h3></div>";
		
		// asort()
		asort($numbers);
		echo "<div class='well'>";
		echo "<h2>asort()</h2><h3>";
		foreach($numbers as $key=>$value) {
			echo $key."->".$value."<br>";
		}
		echo "</h3></div>";

		// arsort()
		arsort($numbers);
		echo "<div class='well'>";
		echo "<h2>arsort()</h2><h3>";
		foreach($numbers as $key=>$value) {
			echo $key."->".$value."<br>";
		}
		echo "</h3></div>";
	?>
</body>
</html>