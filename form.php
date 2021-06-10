<!DOCTYPE html>
<?php
if(isset($_POST['submit']))
{
    include_once('config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    $result = mysqli_query($connection, "INSERT INTO clients(name, email, phone, gender, birth, city, state, country, address)
    VALUES ('$name', '$email', '$phone', '$gender', '$birth', '$city', '$state', '$country', '$address')");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Document</title>
</head>
<body>
    <div class = "box">
        <form action = "form.php" method = "POST">
            <fieldset>
                <legend><b>Form</b></legend>
                <br/>
                <div class="inputbox">
                    <input class = "inputUser" type = "text" id = "name" name = "name" required>
                    <label for="name" class = "labelinput">Name</label>
                </div>
                <br>
                <div class="inputbox">
                    <input class = "inputUser" type = "text" id = "email" name = "email" required>
                    <label for="email" class = "labelinput">Email</label>
                </div>
                <br>
                <div class="inputbox">
                    <input class = "inputUser" type = "tel" id = "phone" name = "phone" required>
                    <label for="phone" class = "labelinput">Phone</label>
                </div>
                <br>
                <p>Gender:</p>
                <input type = "radio" name = "gender" id = "female" value = "F" required>
                <label for = "female">Female</label><br>
                <input type = "radio" name = "gender" id = "male" value = "M" required>
                <label for = "male">Male</label><br>
                <input type = "radio" name = "gender" id = "other" value = "O" required checked="checked">
                <label for = "other">Other</label><br>
                <br><br>

                <label for="birth"><b>Born date:</b></label>
                <input type = "date" id = "birth" name = "birth" required>

                <br>
                <div class="inputbox">
                    <input class = "inputUser" type = "text" id = "country" name = "country" required>
                    <label for="country" class = "labelinput">Country</label>
                </div>
                <br>
                <div class="inputbox">
                    <input class = "inputUser" type = "text" id = "city" name = "city" required>
                    <label for="city" class = "labelinput">City</label>
                </div>
                <br>
                <div class="inputbox">
                    <input class = "inputUser" type = "text" id = "state" name = "state" required>
                    <label for="state" class = "labelinput">State</label>
                </div>
                <br>
                <div class="inputbox">
                    <input class = "inputUser" type = "text" id = "address" name = "address" required>
                    <label for="address" class = "labelinput">Address</label>
                </div>
                <br>
                <input type = "submit" id = "submit" name = "submit">
                <br>
            </fieldset>
        </form>
    </div>
</body>
</html>