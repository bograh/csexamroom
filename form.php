<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Find Exam Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script defer src=""></script>

</head>
<?php

$indexNo = $_GET["indexNo"];
$course = $_GET["course"];
$room = "";

$sf1 = array();
$sf7 = array();
$sf8 = array();
$sf19 = array();
$sf20 = array();
$allIndex = array();

// Generate index numbers and store in array
for($i = 1001; $i <=1100; $i++){
	array_push($sf1, $i);
    array_push($allIndex, $i);
}
for($i = 1101; $i <=1200; $i++){
	array_push($sf7, $i);
    array_push($allIndex, $i);
}
for($i = 1201; $i <=1300; $i++){
	array_push($sf8, $i);
    array_push($allIndex, $i);
}
for($i = 1301; $i <=1400; $i++){
	array_push($sf19, $i);
    array_push($allIndex, $i);
}
for($i = 1401; $i <=1500; $i++){
	array_push($sf20, $i);
    array_push($allIndex, $i);
}


$rooms = array(
    "SF1" => $sf1,
    "SF7" => $sf7,
    "SF8" => $sf8,
    "SF19" => $sf19,
    "SF20" => $sf20
);

$roomName = array_keys($rooms); 
$roomRange = count($rooms);

if (!in_array($indexNo, $allIndex)) {
    echo '<h3>Index Number not found!<h3>
	<div class="text-center"><a href="index.php"><button type="submit" class="btn btn-info btn-lg">GO HOME</button></a></div>
	';
} else{ 
    for($j=0; $j < $roomRange; ++$j) { 
        foreach ($rooms[$roomName[$j]] as $item) {
            if ($indexNo == $item) {
                // echo "Found!!<br>";
                $room = $roomName[$j];
                echo '
                    <div class="output">
                        <h1>You are writing in '.$room.'</h1>
			<div class="text-center"><a href="index.php"><button type="submit" class="btn btn-info btn-lg">GO HOME</button></a></div>
                    <div>
		    
                ';
            }
        }
    }
}

echo '
<style>
h3{
    padding-top: 50px;
    margin-left: 10%;
    margin-right: 10%;
}

.output{
    padding: auto;
    margin-top: 2px;
    margin-left: 10%;
    margin-right: 10%;
}
</style>

';

?>


<!-- # Starting index number of the rooms
SF1_start = 1000
SF7_start = 1101
SF8_start = 1201
SF19_start = 1301
SF20_start = 1401

# Ending index number of the rooms
SF1_end = 1101
SF7_end = 1201
SF8_end = 1301
SF19_end = 1401
SF20_end = 1501 -->
