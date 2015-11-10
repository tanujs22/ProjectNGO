<?php

require 'connect.php';

$sql = "SELECT cat_name FROM pt_cat GROUP BY cat_name ASC,cat_name";
$data = mysqli_query($conn, $sql);
$makes = array();

while ($row = mysqli_fetch_array($data)) {
    array_push($makes, $row["cat_name"]);
}
echo json_encode($makes);



?>