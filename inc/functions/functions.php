<?php
    //Get clients from the database
function getClients() {
    include 'connection.php';
    try {
    $sql = "SELECT * FROM customer2";
    return $conn->query($sql);
    } catch (Exception $e) {
        echo "Error! : " . $e->getMessage();
        return false;
    }
}