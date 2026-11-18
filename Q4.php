<!DOCTYPE html>
<html>
<head>
    <title>Q4 - Sign Up Form</title>
</head>
<body>
    <h2>Sign up</h2>

    <form action="" method="get">
        <label>Email:</label>
        <input type="text" name="email" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="checkbox" name="newsletter" value="yes">
        <label>Subscribe to the newsletter</label>
        <br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){

$email = $_GET['email'];
$status = isset($_GET['newsletter']) ? "Subscribed" : "Not Subscribed";
}
echo "Thank you for signing up, $email. You have $status to the newsletter.";
?>