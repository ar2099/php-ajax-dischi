<?php
require __DIR__ . "/../componenti/database.php";

 header("Content-Type: application/json");
 echo json_encode($database)
?>
