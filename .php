<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    $to = 'recipient@example.com';
    $subject = 'E-Invitation from ' . $name;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h2>You are invited to a special event!</h2>';
    $message .= '<p>Name: ' . $name . '</p>';
    $message .= '<p>Email: ' . $email . '</p>';
    $message .= '<p>Date: ' . $date . '</p>';
    $message .= '<p>Time: ' . $time . '</p>';
    $message .= '<p>Location: ' . $location . '</p>';
    $message .= '<p>' . $message . '</p>';
    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);
    echo 'E-invitation sent successfully!';
}
?>
