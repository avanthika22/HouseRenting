<?php
require_once __DIR__ . '/db.php';
if (isset($_GET['id'])) {
    $sql = "SELECT imgType,id_proff FROM application_form WHERE application_id=?";
    $statement = $con->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    header("Content-type: " . $row["imgType"]);
    echo $row["id_proff"];
}
?>