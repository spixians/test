<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Experiment 1 - A</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row" style="width: 100%; margin: 0 auto;">
        <div class="col-sm-4">
            <div style="width: 100%; margin: 0 auto;">
                <form action="countwords.php" method="POST">
                    <div class="form-group">
                        <div class="row" style="padding-left: 50px;">
                            <br>
                            <h2>ENTER A STRING</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-10" style="padding-left: 50px;">
                                <input type="text" class="form-control" name="string">
                            </div>
                            <div class="col-sm-2">
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
    function countWords($string) {
        $words = explode(" ", $string);
        return count($words);
    }

    function countWordFrequency($string) {
        $words = explode(" ", $string);
        $frequency = array();
        foreach($words as $w1) {
            $count = 0;
            foreach($words as $w2) {
                if($w1 == $w2) {
                    $count = $count + 1;
                }
            }
            array_push($frequency, "$count");
            echo "<h3>".$w1.": ".$count."<br>";
        }
    }
    echo "<div class='well'><h2>Number of words: ".countWords($_POST["string"])."</h2></div>";
    echo "<div class='well'>";
    echo "<h2>Word Frequency</h2>";
    countWordFrequency($_POST["string"]);
    echo "</div>";
    ?>
</body>
</html>