<?php

require 'connect.php';

$sql = "SELECT ngo_id FROM ngo_detail GROUP BY ngo_id ASC,ngo_id";
$data = mysqli_query($conn, $sql);
$makes = array();

while ($row = mysqli_fetch_array($data)) {
    array_push($makes, $row["ngo_id"]);
}
echo json_encode($makes);



?>