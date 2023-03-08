<html >
<head>
    <title>first form</title>
    <style>
        form>input{
            margin: 20 20 20 20;
        }
    </style>
</head>
<body>
<h1>hello please enter your name in form</h1>
<form method="post" action="simple_form.php">
    <label for="fname">First Name:</label><br>
    <input type="text" name="fname" id="fname"><br>
    <label for="lname">Last Name:</label><br>
    <input type="text" name="lname" id="lname"><br><br>
    <input type="submit" value="submit">
    
</form>
</body>
</html>
<?php
if(isset($_POST["fname"]) && isset($_POST["lname"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    echo "hello ".$fname." ".$lname;
}