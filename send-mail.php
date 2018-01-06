// if(isset($_POST['submit'])){
//     $to = "samtkling@gmail.com"; // this is your Email address
//     $from = $_POST['email']; // this is the sender's Email address
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $subject = "PhotoBooth submission";
//     $subject2 = "Copy of your PhotoBooth submission";
//     $message = $first_name . " " . $last_name . " would like to know more about the using the photobooth:" . "\n\n" . $_POST['email'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['email'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     header('Location: index.html');
// } else {
// 	header('Location: contact.html');
// } 