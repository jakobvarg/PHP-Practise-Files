<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation and Process<i class="fa fa-instagram" aria-hidden="true"></i></title>
</head>

<style>
    .error {
        animation: blinker 1.5s linear infinite;
        color: #FF0000;
    }
</style>

<body>

<!-- this PHP code has to entered here else there will be error like variable not found -->

<?php 

$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";


if($_SERVER['REQUEST_METHOD']=="POST") {
    if(empty($_POST['name'])) {
        $nameErr = "Name is required";
    }
    else {
        $name = secure_input($_POST['name']);
        //check if the field name has anything other than whitespace and other special characters
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if(empty($_POST['email'])) {
        $emailErr = "Email is required";
    }
    else {
        $email = secure_input($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST['website'])) {
        $websiteErr = "Website address is required";
    } else {
        $website = secure_input($_POST['website']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if(empty($_POST['comment'])) {
        $commentErr = "Enter a comment";
    } else {
        $comment = secure_input($_POST['comment']);
    }

    if(empty($_POST['gender'])) {
        $genderErr = 'Choose a gender';
    } else {
        $gender = secure_input($_POST['gender']);
    }

}


function secure_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}   

?>

<h2>Form Validation and Security Example</h2>
    <p>
        <font color="red">*All fields required...</font>
    </p>
    
    <!-- To keep the values in the form even after pressing the submit button we will add a php code to the values in the input fields

        but for the textarea you have to put the php code between the tags and not as value="" -->
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <br>
        <span class="error"><?php echo $nameErr; ?></span>
        <br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>">
        <br>
        <span class="error"><?php echo $emailErr; ?></span>
        <br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <br>
        <span class="error"><?php echo $websiteErr; ?></span>
        <br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br>
        <span class="error"><?php echo $commentErr; ?></span>
        <br>
        Gender:
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") { echo "Checked"; } ?> value="Female">Female
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") { echo "Checked"; } ?> value="Male">Male
        <br>
        <span class="error"><?php echo $genderErr; ?></span> 
        <br>
        <button type="submit">Submit</button>
    </form>

    <h2>Your Data in the Form</h2>
    <p>Inquirer Name: <?php echo $name ?></p>
    <p>Inquirer Email: <?php echo $email ?></p>
    <p>Inquirer Website: <?php echo $website ?></p>
    <p>Inquirer Comment: <?php echo $comment ?></p>
    <p>Inquirer Gender: <?php echo $gender ?></p>

    <br>
    <?php 
        //set the timezone to India
        date_default_timezone_set('Asia/Kolkata'); 
    ?>
    <p>&copy; <?php echo date("l").date("Y-m-d, H:i:sa"); ?></p>

</body>
</html>