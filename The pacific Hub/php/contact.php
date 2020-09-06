<?php
// variable settings
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check input fields

if (empty($name) || empty($email) || empty($message))
{
    echo "Please Fill all The fields";
}
else
{
    mail("adityakumarverified@gmail.com", "Test Message", $message, "From: $name <$email> " );
    echo"<script type='text/javascript'>alert('Your message is Sent Succesfully');
    window.history.log(-1);
    </script>";
}
?>