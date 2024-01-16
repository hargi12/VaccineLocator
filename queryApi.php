<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ugVaccine";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
    	echo "Connected successfully";
    }

    // sample coordinates
    // $lat = 7.08594109039762;
    // $lng = 86.95225338731285;
    $lat = $_GET['latitude'];
    $lng = $_GET['longitude'];
    
        
    // Only show places within 100km
    $distance = 6075;

    $lat = mysqli_real_escape_string($conn, $lat);
    $lng = mysqli_real_escape_string($conn, $lng);
    $distance = mysqli_real_escape_string($conn, $distance);

    $query = <<<EOF
    SELECT * FROM (
        SELECT *, 
            (
                (
                    (
                        acos(
                            sin(( $lat * pi() / 180))
                            *
                            sin(( `lat` * pi() / 180)) + cos(( $lat * pi() /180 ))
                            *
                            cos(( `lat` * pi() / 180)) * cos((( $lng - `lng`) * pi()/180)))
                    ) * 180/pi()
                ) * 60 * 1.1515 * 1.609344
            )
        as distance FROM `markers`
    ) markers
    WHERE distance <= $distance
    LIMIT 15;
EOF;

$result = $conn->query($query);
    
$heathfacility_distance = array();

while ($row = mysqli_fetch_assoc($result)) {
	$heathfacility_distance[] = $row;
}

if ($heathfacility_distance) {
	# try to encode the results
	print("{'msg': 'has results', 'info': '". json_encode($heathfacility_distance) ."'}");
} else {
	print("{'msg': 'no results'}");
}

mysqli_free_result($result);
mysqli_close($conn);

?>

