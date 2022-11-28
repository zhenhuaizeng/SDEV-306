<?php
echo "Thank you for submitting";
require '/home/zhenhuai/db.php';
$message_Page = $_POST['message'];
$name_Page = $_POST['name'];
$sql = "INSERT INTO `messages` (`message`,`name`) VALUES ('$message_Page', '$name_Page')";
$result = @mysqli_query($cnxn, $sql);
echo "<a href = 'Guestbook.php'> Go back</a>";

//// Recipient
//$to = "zengzhenhuai8@gmail.com";
//
////Subject
//$subject = '<h1> Hi there.</h1> <p>Thanks for testing!</p>';
//
////Message
//$message = '<h1>Hi there,</h1> <p>Thanks for leaving messages</p>';
//
////Headers
//$header = "From: Jack <zengzhenhuai8@gmail.com> \r\n";
//$header .= "Reply-To: zengzhenhuai8@gmail.com\r\n";
//$header .= "Content-type: text/html\r\n";
//
////send email
//mail($to,$subject,$message,$header);