<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = 'Contact GexHost';
    $message =  
    '<p style="font-family: Roboto,sans-serif; font-size:12px; color:#b0b1af; margin-bottom:0px; font-weight:bold;">Name </p>
    <span style="display:block; color:black; font-family: Roboto,sans-serif; font-size:14px; margin-bottom:15px; font-weight:bold;">'. $name .'</span>
    <p style="font-family: Roboto,sans-serif; font-size:12px; color:#b0b1af; margin-bottom:0px; font-weight:bold;">Email </p>
    <span style="display:block; color:black; font-family: Roboto,sans-serif; font-size:14px; margin-bottom:15px; font-weight:bold;">'. $email .'</span>
    <p style="font-family: Roboto,sans-serif; font-size:12px; color:#b0b1af; margin-bottom:0px; font-weight:bold;">Contact Number </p>
    <span style="display:block; color:black; font-family: Roboto,sans-serif; font-size:14px; margin-bottom:15px; font-weight:bold;">'. $phone .'</span>
    <p style="font-family: Roboto,sans-serif; font-size:12px; color:#b0b1af; margin-bottom:0px; font-weight:bold;">Message </p>
    <span style="display:block; color:black; font-family: Roboto,sans-serif; font-size:14px; margin-bottom:15px; font-weight:bold;">'. $_POST["message"].'</span>';
    
    $to = "tahirpathan3@gmail.com"; // Replace with the recipient's email
    $headers = "From: $email";

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.php?result=success");
    } else {
        header("Location: index.php?result=failed");
    }
}
?>