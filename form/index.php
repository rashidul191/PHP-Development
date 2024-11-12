<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Send the email
            $to = 'rashidul.191cse.gub@gmail.com';
            $subject = 'New message from ' . $name;
            $body = "Name: $name\nEmail: $email\nMessage: $message";
            $headers = 'From: your_email@example.com'; // Change this to your email address
            if (mail($to, $subject, $body, $headers)) {
                // Email sent successfully, redirect to Google
                header("Location: https://www.google.com");
                exit();
            } else {
                // Email sending failed, redirect to Facebook
                header("Location: https://www.facebook.com");
                exit();
            }
        }
    }
    ?>
    <form action="http://localhost:3030/" method="post">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <textarea name="message" rows="5" placeholder="message"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>



</body>

</html>