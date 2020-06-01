<?php
    include('connect_db.php');
    $zipcode="573201";
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$zipcode."&key=AIzaSyDeb2feCGV_WQXXYX4Rk9GgApaS58jhU1g";
    $details=file_get_contents($url);
    $result = json_decode($details,true);
   
    $lat=$result['results'][0]['geometry']['location']['lat'];

    $lng=$result['results'][0]['geometry']['location']['lng'];
    echo $url;
    echo "Latitude :" .$lat;
    echo '<br>';
    echo "Longitude :" .$lng;
    $lat1 = 12.6296231;
    $lng1 = 75.83015371;
    $sql = "INSERT INTO location(user_x, user_y) VALUES('$lat', '$lng');";
    $result = $conn->query($sql);
    echo $result;
    echo $sql;
    $hmaps_request= "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=$lat,$lng&destinations=$lat1%2C$lng1&key=AIzaSyDeb2feCGV_WQXXYX4Rk9GgApaS58jhU1g";
						$data = file_get_contents($hmaps_request);
						$data = json_decode($data);
							$time = 0;
							$distance = 0;
							foreach($data->rows[0]->elements as $road) {
								$time += $road->duration->text;
								$distance += $road->distance->text;
							}
							$distance_1=$distance;
							$time_1 = $table[1];
							$distance_2 = $distance_1 * 1.609; 
                            $time_2 = $time_1 + 15;
                            // echo $distance;
                            // echo $time;
                            echo $distance_2;
                            echo"<br>";
                            echo $time_2;
                        
   
    ?>
    