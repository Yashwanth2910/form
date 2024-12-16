<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);

    echo \"<h1>Registration Successful</h1>\";
    echo \"<p>Name: $name</p>\";
    echo \"<p>Email: $email</p>\";
    echo \"<p>Phone: $phone</p>\";
    echo \"<p>Date of Birth: $dob</p>\";
    echo \"<p>Gender: $gender</p>\";
    echo \"<p>Address: $address</p>\";
} else {
    echo \"<p>Invalid Request</p>\";
}
?>
