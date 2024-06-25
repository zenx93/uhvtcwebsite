<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["VTC_Id"];
    $vtcName = $_POST["VTC_Name"];
    $position = $_POST["VTC_Position"];
    $no = $_POST["VTC_No"]; 
    $vtcLink = $_POST["VTC_TruckersMP_Link"];
    $slotNumber = $_POST["Slot_Number"];

    $stmt = $conn->prepare("INSERT INTO October_Slots (VTC_Id, VTC_Name, VTC_Position, VTC_No, VTC_TruckersMP_Link, Slot_Number) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $id, $vtcName, $position, $no, $vtcLink, $slotNumber);
    
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();

    exit();
} else {
    echo "No data submitted";
}

