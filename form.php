<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Find Exam Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/style.css">
    <script defer src=""></script>

</head>
<?php
include 'header.php';
include 'room_var.php';

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
for($i = $sf1_start; $i <=$sf1_end; $i++){
	array_push($sf1, $i);
    array_push($allIndex, $i);
}
for($i = $sf7_start; $i <=$sf7_end; $i++){
	array_push($sf7, $i);
    array_push($allIndex, $i);
}
for($i = $sf8_start; $i <=$sf8_end; $i++){
	array_push($sf8, $i);
    array_push($allIndex, $i);
}
for($i = $sf19_start; $i <=$sf19_end; $i++){
	array_push($sf19, $i);
    array_push($allIndex, $i);
}
for($i = $sf20_start; $i <=$sf20_end; $i++){
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
