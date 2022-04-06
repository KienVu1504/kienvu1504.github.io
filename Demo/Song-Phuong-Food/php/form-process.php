<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Vui lòng không bỏ trống tên!";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Vui lòng không bỏ trống email!";
} else {
    $email = $_POST["email"];
}

// // MSG Guest
// if (empty($_POST["guest"])) {
//     $errorMSG .= "Subject is required ";
// } else {
//     $guest = $_POST["guest"];
// }


// // MSG Event
// if (empty($_POST["event"])) {
//     $errorMSG .= "Subject is required ";
// } else {
//     $event = $_POST["event"];
// }


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Vui lòng không bỏ trống nội dung ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "kvstudio.154@gmail.com";
$Subject = "Có tin nhắn từ Song Phương Food Website";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
// $Body .= "guest: ";
// $Body .= $guest;
// $Body .= "\n";
// $Body .= "event: ";
// $Body .= $event;
// $Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Ôi không đã có lỗi sảy ra :(";
    } else {
        echo $errorMSG;
    }
}
?>