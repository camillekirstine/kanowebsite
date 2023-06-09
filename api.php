<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

header ("content-type: application/json; charset=utf-8");

if(isset($data["password"]) && $data["password"] == "kanohair") {

    $sql = "SELECT * FROM staffInfo WHERE 1=1";
    $bind = [];

    $sql .= " ORDER BY staffId ASC";

    $staffInfo = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($staffInfo);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Password is incorrect" ;

    echo json_encode($error);

}


?>