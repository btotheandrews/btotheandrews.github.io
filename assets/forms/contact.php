<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"])) {
        die(1);
    }
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
        die(1);
    }
    else {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $subject = test_input($_POST["subject"]);
        $message = test_input($_POST["message"]);
    }

    
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>