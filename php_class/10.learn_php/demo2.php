<?php
if (isset($_POST['submit123'])) {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $city = htmlspecialchars($_POST['city']);
    echo '
    <div class="output">
        Name: ' . $name . '<br>
        Contact: ' . $contact . '<br>
        City: ' . $city . '
    </div>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        form {
            height: 500px;
            width: 500px;
        }
        label {
            margin: 20px;
        }
        input[type="text"] {
            margin: 10px;
        }
        div {
            border: 2px solid red;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form action="demo2.php" method="post">
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Contact</label><br>
        <input type="text" name="contact"><br>
        <label>City</label><br>
        <input type="text" name="city"><br>
        <button name="submit123" type="submit">Submit</button>
    </form>
</body>
</html>
