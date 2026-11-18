<!DOCTYPE html>
<html>
<head>
    <title>Q3 - User Details Form</title>
</head>
<body>
    <h2>Tell us about you</h2>

    <form action="" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Age:</label>
        <input type="number" name="age" min="1" required>
        <br><br>

        <label>Gender:</label>
        <select name="gender">
            <option name="gender" value="Male">Male</option>
            <option name="gender" value="Female">Female</option>
            <option name="gender" value="Other">Other</option>
        </select>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
$name   = $_POST['name'];   
$age    =  $_POST['age'];
$gender = $_POST['gender'];
}
echo "Hello, $name. You are $age years old and identify as $gender.";
?>